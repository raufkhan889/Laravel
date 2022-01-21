$(document).ready(function () {

    wishlistCount();
    cartCount();

    function wishlistCount() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/wishlist-count",
            success: function (response) {
                $('.wishlist-count').html("");
                $('.wishlist-count').html(response.count);
            }
        });
    }

    function cartCount() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/cart-count",
            success: function (response) {
                $('.cart-count').html("");
                $('.cart-count').html(response.count);
            }
        });
    }

    $('.add-to-cart-btn').click(function (e) {
        e.preventDefault();

        var product_qty = $(this).closest('.card-parent').find('.qty_val').val();
        var product_id = $(this).closest('.card-parent').find('.product_id').val();

        // ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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

        var qty_val = $(this).closest('.card-parent').find('.qty_val').val();
        // var qty_val = $('.qty_val').val();
        var count = parseInt(qty_val, 10);

        if (count < 10) {
            count++;
            $(this).closest('.card-parent').find('.qty_val').val(count);
        }
    });

    $('.dec_btn').click(function (e) {
        e.preventDefault();

        var qty_val = $(this).closest('.card-parent').find('.qty_val').val();
        // var qty_val = $('.qty_val').val();
        var count = parseInt(qty_val, 10);

        if (count > 1) {
            count--;
            $(this).closest('.card-parent').find('.qty_val').val(count);
        }
    });

    $('.delete-cart-btn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.card-parent').find('.product_id').val();

        // ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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
    });

    $('.changeQty').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.card-parent').find('.product_id').val();
        var product_qty = $(this).closest('.card-parent').find('.qty_val').val();

        // ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/update-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response) {
                window.location.reload();
                // swal(response.status);
            }
        });
    });

    // wishlist 
    $('.add-to-wishlist').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.card-parent').find('.product_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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
});