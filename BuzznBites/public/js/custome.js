$(document).ready(function () {

    // csrf for Ajax request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    cartCount();
    wishlistCount();

    function cartCount() {
        $.ajax({
            method: "POST",
            url: "/cart-count",
            success: function (response) {
                $('.cart-count').html("");
                $('.cart-count').html(response.count);
            }
        });
    }

    function wishlistCount() {

        $.ajax({
            method: "POST",
            url: "/wishlist-count",
            success: function (response) {
                $('.wishlist-count').html("");
                $('.wishlist-count').html(response.count);
            }
        });
    }

    $('.add-to-cart-btn').click(function (e) {
        e.preventDefault();

        var product_qty = $(this).closest('.card-parent').find('.qty_val').val();
        var product_id = $(this).closest('.card-parent').find('.product_id').val();

        $.ajax({
            method: "POST",
            url: "/add-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response) {
                swal(response.status);
                cartCount();
            }
        });
    });

    $('.inc_btn').click(function (e) {
        e.preventDefault();

        var qty_val = $(this).closest('.card-parent').find('.qty_val').val()
        var count = parseInt(qty_val, 10);

        if (count < 10) {
            count++;
            $(this).closest('.card-parent').find('.qty_val').val(count);
        }
    });

    $('.dec_btn').click(function (e) {
        e.preventDefault();

        var qty_val = $(this).closest('.card-parent').find('.qty_val').val();
        var count = parseInt(qty_val, 10);

        if (count > 1) {
            count--;
            $(this).closest('.card-parent').find('.qty_val').val(count);
        }
    });

    $('.changeQty').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.card-parent').find('.product_id').val();
        var product_qty = $(this).closest('.card-parent').find('.qty_val').val();

        $.ajax({
            method: "POST",
            url: "/update-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response) {
                window.location.reload();
                // cartCount();
                // $(".change-cart").load(" .change-cart>*");
                // $('.change-cart').load(location.href + " .change-cart>*", "");
            }
        });
    });

    $('.delete-cart-btn').click(function (e) {
        e.preventDefault();

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this cart!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    var product_id = $(this).closest('.card-parent').find('.product_id').val();

                    $.ajax({
                        method: "POST",
                        url: "/delete-cart",
                        data: {
                            'product_id': product_id,
                        },
                        success: function (response) {
                            swal("", response.status, "success");
                            window.location.reload();
                        }
                    });
                }
            });

    });

    // wishlist 
    $('.add-to-wishlist').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.card-parent').find('.product_id').val();

        $.ajax({
            method: "POST",
            url: "/add-wishlist",
            data: {
                'product_id': product_id,
            },
            success: function (response) {
                swal(response.status);
                wishlistCount();
            }
        });
    });

    $('.delete-wishlist-btn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.card-parent').find('.product_id').val();

        $.ajax({
            method: "POST",
            url: "/delete-wishlist",
            data: {
                'product_id': product_id,
            },
            success: function (response) {
                window.location.reload();
                swal("", response.status, "success");
            }
        });

    });


    // admin side script 
    $('.delete-category-btn').click(function (e) {
        e.preventDefault();

        var category_id = $(this).closest('.card-parent').find('.category_id').val();

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this category!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "/admin/category/destroy",
                        data: {
                            'category_id': category_id,
                        },
                        success: function (response) {
                            swal("", response.status, "success");
                            window.location.reload();
                        }
                    });

                }
            });
    });


    $('.delete-product-btn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.card-parent').find('.product_id').val();

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this Product!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "/admin/product/destroy",
                        data: {
                            'product_id': product_id,
                        },
                        success: function (response) {
                            swal("", response.status, "success");
                            window.location.reload();
                        }
                    });

                }
            });
    });


    $('.delete-user-btn').click(function (e) {
        e.preventDefault();

        var user_id = $(this).closest('.card-parent').find('.user_id').val();

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this User!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "/admin/users/destroy",
                        data: {
                            'user_id': user_id,
                        },
                        success: function (response) {
                            swal("", response.status, "success");
                            window.location.reload();
                        }
                    });

                }
            });
    });




});