const View = {
    Description: {
        render(data){
            var cards = localStorage.getItem("card") == null ? "" : localStorage.getItem("card").split("-");
            var real_prices     = View.formatNumber(data.discount == 0 ? data.prices : data.prices - (data.prices*data.discount/100));
            var sell_prices     = View.formatNumber(data.prices*data.discount/100);
            var discount        = data.discount;
            prices = "";
                                                
            discount != 0 ? prices += `<del> <span class="new-price">${View.formatNumber(data.prices)}</span>  đ </del>` : "";
            prices += `<span class="new-price">${real_prices} đ</span> `;

            $(".action-add-to-card").attr("data-id", data.id)
            $(".action-add-to-card").html(cards.includes(data.id+"") ? "✔ đã thêm" : "+ Giỏ hàng")
            $(".product-name").text(data.name);
            $(".product-description").html(data.description);
            $(".product-detail").html(data.detail)
            $(".product-prices").append(prices)

            var size = JSON.parse(data.metadata).size.map(v => `<li><span>${v}</span></li>`).join("")
            var color = JSON.parse(data.metadata).color.map(v => `<li><span style="background-color: ${v};"></span></li>`).join("")
            $(".product-size").append(size)
            $(".product-color").append(color)
        }
    },
    Images: {
        render_list(data){
            data.split(",").map((value, key) => {
                $(".single-product-cover").append(`
                    <div class="single-slide zoom-image-hover">
                        <img class="img-responsive" src="/${value}" alt="">
                    </div>
                `)
                $(".single-nav-thumb").append(`
                    <div class="single-slide">
                        <img class="img-responsive" src="/${value}" alt="">
                    </div>
                `)
            })
            $('.single-product-cover').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                asNavFor: '.single-nav-thumb',
            });

            $('.single-nav-thumb').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.single-product-cover',
                dots: false,
                arrows: true,
                focusOnSelect: true
            });
        }
    }, 
    RelatedProduct: {
        render(data){
            var cards = localStorage.getItem("card") == null ? "" : localStorage.getItem("card").split("-");
            data.map(v => {
                var image           = v.images.split(",")[0];
                var size = JSON.parse(v.metadata).size.map(v => `<li><a href="#" class="ec-opt-sz">${v}</a></li>`).join("")
                var color = JSON.parse(v.metadata).color.map(v => `<li><a href="#" class="ec-opt-clr-img" ><span style="background-color: ${v};"></span></a></li>`).join("")
                var discount = v.discount == 0 ? "" : `<span class="percentage">${v.discount}%</span><span class="flags"> <span class="sale">Sale</span> </span>`
                var real_prices     = View.formatNumber(v.discount == 0 ? v.prices : v.prices - (v.prices*v.discount/100));
                var discount_value = v.discount == 0 ? "" : `<span class="old-price">${View.formatNumber(v.prices)} đ</span>`
                $(".product-related").append(`
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="/product?id=${v.id}" class="image">
                                        <img class="main-image" src="${image}" alt="Product" />
                                    </a>
                                    ${discount}
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="/product?id=${v.id}">${v.name}</a></h5>
                                <span class="ec-price">
                                    ${discount_value}
                                    <span class="new-price">${real_prices} đ</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            ${color}
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            ${size}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `)
            })   
        }
    },
    isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    },
    formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    },
    URL: {
        get(id){
            var urlParam    = new URLSearchParams(window.location.search);
            return urlParam.get(id)
        }
    }, 
    init(){
        $(document).on('keypress', `.product-quantity`, function(event) {
            return View.isNumberKey(event);
        });
    }
};
(() => {
    View.init()
    function init(){
        getProduct(); 
        getRelatedProduct();
    }
    function debounce(f, timeout) {
        let isLock = false;
        let timeoutID = null;
        return function(item) {
            if(!isLock) {
                f(item);
                isLock = true;
            }
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                isLock = false;
            }, timeout);
        }
    }

    function getProduct(){
        Api.Product.GetOne(View.URL.get("id"))
            .done(res => {
                View.Images.render_list(res.data[0].images);
                View.Description.render(res.data[0]);
            })
            .fail(err => {  })
            .always(() => { });
    } 
    function getRelatedProduct(){
        Api.Product.GetRelated(View.URL.get("id"))
            .done(res => {
                // console.log(res);
                View.RelatedProduct.render(res.data);
            })
            .fail(err => {  })
            .always(() => { });
    } 
    init()
})();
