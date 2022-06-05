<script src="<?php echo base_url("assets/") ?>jquery/jquery-3.3.1.min.js"></script>
<script src="https://malsup.github.io/jquery.blockUI.js"></script>
<script src="<?php echo base_url("assets/") ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assets/") ?>shuffle/shuffle.min.js"></script>
<script src="<?php echo base_url("assets/") ?>waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url("assets/") ?>slick/slick.min.js"></script>
<script src="<?php echo base_url("assets/") ?>js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    baseUrl = "<?php echo base_url(); ?>";
    isLogin = "<?php echo $this->session->userdata('isLogin'); ?>";

    function loadCart() {
        $.ajax({
            type: "GET",
            url: baseUrl + "C_cart/load_cart",
            dataType: "JSON",
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(arguments);
                console.log(errorThrown);
                console.log(textStatus);
            },
            success: function(data) {
                $('.data-item-cart').block({
                    message: "<h4>loading...</h4>",
                    css: {
                        border: 'none',
                        position: 'static',
                        width: '100%',
                        padding: '10px',
                        backgroundColor: 'black'
                    }
                });
                let shipping = 0;
                let subTotal = 0;
                let nf = new Intl.NumberFormat();
                $(".data-item-cart").empty();
                $(".badge-cart").empty();
                $(".sub-total-cart").empty();
                $(".total-cart").empty();
                $(".shipping-cart").empty();
                if (data.result.length !== 0) {
                    shipping = 6000;
                    $(".badge-cart").append(data.result.length);
                    no = 0;
                    $.each(data.result, function(i, val) {
                        no = no++;
                        let subTotalItem = val.price * val.qty;
                        subTotal += subTotalItem;
                        $(".data-item-cart").append(
                            `                
                        <div class='entity'>
                            <div class='grid-sm row'>
                                <div class='col-5'>
                                    <a class='entity-preview-show-up entity-preview' href='${baseUrl}C_product/view/${val.idProduct}'>
                                        <span class='embed-responsive embed-responsive-4by3'>
                                            <img class='embed-responsive-item' src='${baseUrl}assets/upload/products/${val.image}' alt='' />
                                        </span>
                                        <span class='with-back entity-preview-content'>
                                            <span class='h3 m-auto text-theme text-center'>
                                                <i class='fas fa-search'></i></span><span class='overflow-back bg-body-back opacity-70'>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class='col'>
                                    <h4 class='h5 mb-1 entity-title'>
                                        <a class='content-link' href='${baseUrl}C_product/view/${val.idProduct}'>${val.name}</a>
                                    </h4>
                                    <div class='entity-price'>
                                        <span class='currency'>Rp </span>${nf.format(val.price)}<span class='entity-quantity'>&nbsp;x&nbsp;${val.qty}</span>
                                    </div>
                                    <div class='entity-total'>total:&nbsp;&nbsp;&nbsp;${nf.format(subTotalItem)}</div>
                                </div>
                            </div>
                        </div>`
                        );
                    });
                } else {
                    $(".badge-cart").append("0");
                    $(".data-item-cart").append(`
                    <div class='entity'>
                        <div class='grid-sm row'>
                            <div class='col-12 text-center'>
                                <h4>Keranjang Kosong</h4>
                            </div>
                        </div>
                    </div>
                    `);
                }

                $(".sub-total-cart").append("Rp " + nf.format(subTotal));
                $(".shipping-cart").append("Rp " + nf.format(shipping));
                $(".total-cart").append("Rp " + nf.format(subTotal + shipping));

                $('.data-item-cart').unblock();
            },
        });
    }

    window.onload = function() {
        loadCart();
    };
</script>