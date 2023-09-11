console.log("op");
$(document).ready(function () {

    // Function for changing theme normal to dark theme
    $("#dark_logo").click(function () {
        $("div").toggleClass("dark_theme");
        $("#dark_logo").toggleClass("fa-moon fa-sun");
    });

    // Function to show menu_bar
    $("#bars").click(function () {
        $("#nav_bar").toggle();
    });

    // Function to show search icon
    $("#search_icon").click(function () {
        $("#search-box").toggle();
    });

    // Function to show review form
    $("#form").click(function () {
        $(".review_form").toggle("slow");
    });

    // Function to show show and close cart
    $(".cart").click(function () {
        $(".atc").toggle("slow").css("display", "flex");
    });
    $(".close_cart").click(function () {
        $(".atc").toggle("slow").css("display", "none");
    });

    // Function to show update profile popup
    $("#update_btn").click(function () {
        $("#updateform_popup").toggle("slow").css("display", "flex");
    });
    $(".close_updateform").click(function () {
        $("#updateform_popup").hide();
    });

    // Function to show profile card
    $(".profileview").click(function () {
        $(".profilecard").toggle("slow");
    });

    // Function to switch from one tab to the other tab in the full product details
    $("#desc_tab").click(function () {
        $(".desc_tab").css("display", "flex");
        $("#desc_tab").addClass("active_tab");
        $("#Review_tab").removeClass("active_tab");
        $(".review_tab").hide();
    });

    $("#Review_tab").click(function () {
        $(".review_tab").css("display", "flex");
        $("#Review_tab").addClass("active_tab");
        $("#desc_tab").removeClass("active_tab");
        $(".desc_tab").hide();
    });
    // Function to show product preview and product category
    // $(".edit_product").click(function () {
    //     $(".product_preview").toggle("slow").css("display", "flex");
    // });
    // Function to show the pop-up form of the product edit
    $(".edit_product").click(function () {
        $(".productedit_popup").toggle("slow").css("display", "flex");
    });
    $(".close_productform").click(function () {
        $(".productedit_popup").toggle("slow").css("display", "none");
    });

    // Function to show the pop-up form of the product edit
    $(".category_edit_btn").click(function () {
        $("#catedit_popup").toggle("slow").css("display", "flex");
    });
    $(".close_catform").click(function () {
        $("#catedit_popup").toggle("slow").css("display", "none");
    });

    $(".edit_cat").click(function () {
        $(".category_preview").toggle("slow").css("display", "flex");
    });





    // Add new product popup form 
    $(".anproduct").click(function () {
        $("#addproduct_popup").toggle("slow").css("display", "flex");
    });
    $(".close_addproductform").click(function () {
        $("#addproduct_popup").toggle("slow").css("display", "none");
    });

    // Add new category popup form 
    $(".ancategory").click(function () {
        $(".catadd_popup").toggle("slow").css("display", "flex");
    });
    $(".close_addcatform").click(function () {
        $(".catadd_popup").toggle("slow").css("display", "none");
    });








    // View Order Invoice popup 
    $(".view_btn").click(function () {
        $(".order_recipet").toggle("slow").css("display", "flex");
    });
    $(".close_orderform").click(function () {
        $(".order_recipet").toggle("slow").css("display", "none");
    });

    $(".aninvoice").click(function () {
        $(".add_order_recipet").toggle("slow").css("display", "flex");
    });
    $(".close_orderinvoice").click(function () {
        $(".add_order_recipet").toggle("slow").css("display", "none");
    });


    // Function to switch the tabs on click of the side nav bar in the dashboard
    $(".dashboard_tab").click(function () {
        $(".dashboard").css("display", "flex");
        $(".dashboard_tab").addClass("side_nav_active");
        $(".customer_tab").removeClass("side_nav_active");
        $(".product_tab").removeClass("side_nav_active");
        $(".order_tab").removeClass("side_nav_active");
        $(".blog_tab").removeClass("side_nav_active");
        $("#customer_dash").hide();
        $("#product_dash").hide();
        $(".order_dash").hide();
        $(".blog_dash").hide();
        $(".admin_title").html("Admin Dashboard");

    });

    $(".customer_tab").click(function () {
        $("#customer_dash").css("display", "flex");
        $(".customer_tab").addClass("side_nav_active");
        $(".dashboard_tab").removeClass("side_nav_active");
        $(".product_tab").removeClass("side_nav_active");
        $(".order_tab").removeClass("side_nav_active");
        $(".blog_tab").removeClass("side_nav_active");
        $(".dashboard").hide();
        $(".order_dash").hide();
        $("#product_dash").hide();
        $(".admin_title").html("Customers Dashboard");

    });
    $(".product_tab").click(function () {
        $("#product_dash").css("display", "flex");
        $(".product_tab").addClass("side_nav_active");
        $(".customer_tab").removeClass("side_nav_active");
        $(".dashboard_tab").removeClass("side_nav_active");
        $(".order_tab").removeClass("side_nav_active");
        $(".dashboard").hide();
        $(".blog_tab").removeClass("side_nav_active");
        $("#customer_dash").hide();
        $(".order_dash").hide();
        $(".admin_title").html("Products Dashboard");

    });
    $(".order_tab").click(function () {
        $(".order_dash").css("display", "flex");
        $(".blog_tab").removeClass("side_nav_active");
        $(".product_tab").removeClass("side_nav_active");
        $(".order_tab").addClass("side_nav_active");
        $(".customer_tab").removeClass("side_nav_active");
        $(".dashboard_tab").removeClass("side_nav_active");
        $(".dashboard").hide();
        $("#customer_dash").hide();
        $("#product_dash").hide();
        $(".admin_title").html("Orders Dashboard");

    });
    $(".blog_tab").click(function () {
        $(".blog_dash").css("display", "flex");
        $(".order_dash").hide();
        $(".product_tab").removeClass("side_nav_active");
        $(".blog_tab").addClass("side_nav_active");
        $(".order_tab").removeClass("side_nav_active");
        $(".customer_tab").removeClass("side_nav_active");
        $(".dashboard_tab").removeClass("side_nav_active");
        $(".dashboard").hide();
        $("#customer_dash").hide();
        $("#product_dash").hide();
        $(".admin_title").html("Blogs Dashboard");

    });
    $(".logout_tab").click(function () {
        $(".order_dash").css("display", "flex");
        $(".blog_tab").removeClass("side_nav_active");
        $(".product_tab").removeClass("side_nav_active");
        $(".logout_tab").addClass("side_nav_active");
        $(".order_tab").removeClass("side_nav_active");
        $(".customer_tab").removeClass("side_nav_active");
        $(".dashboard_tab").removeClass("side_nav_active");
        $(".dashboard").hide();
        $("#customer_dash").hide();
        $("#product_dash").hide();
        $(".admin_title").html("Orders Dashboard");

    });




    // User Dashborad navigation using sidebar tabs 

    $(".user_dash_tab").click(function () {
        $(".title-dash").html("Welcome back to the Dashboard");
        $(".user_dash_tab").addClass("side_nav_active");
        $(".user_profile_tab").removeClass("side_nav_active");
        $(".user_order_tab").removeClass("side_nav_active");
        $(".user_acc_tab").removeClass("side_nav_active");
        $(".user_contact_tab").removeClass("side_nav_active");
        $(".user_dashboard").show();
        $(".account_setting").hide();
        $(".profile_tab").hide();

    });
    $(".user_profile_tab").click(function () {
        $(".title-dash").html("My Profile");
        $(".user_dash_tab").removeClass("side_nav_active");
        $(".user_profile_tab").addClass("side_nav_active");
        $(".user_order_tab").removeClass("side_nav_active");
        $(".user_acc_tab").removeClass("side_nav_active");
        $(".user_contact_tab").removeClass("side_nav_active");
        $(".profile_tab").show();
        $(".user_dashboard").hide();
        $(".account_setting").hide();
        $(".userorder_tab").hide();
        $(".contact_dash").hide();

    });
    $(".user_order_tab").click(function () {
        $(".title-dash").html("Order Dashboard");
        $(".user_dash_tab").removeClass("side_nav_active");
        $(".user_profile_tab").removeClass("side_nav_active");
        $(".user_order_tab").addClass("side_nav_active");
        $(".user_acc_tab").removeClass("side_nav_active");
        $(".user_contact_tab").removeClass("side_nav_active");
        $(".profile_tab").hide();
        $(".user_dashboard").hide();
        $(".account_setting").hide();
        $(".contact_dash").hide();
        $(".userorder_tab").show();


    });
    $(".user_acc_tab").click(function () {
        $(".title-dash").html("Account Settings Dashboard");
        $(".user_dash_tab").removeClass("side_nav_active");
        $(".user_profile_tab").removeClass("side_nav_active");
        $(".user_order_tab").removeClass("side_nav_active");
        $(".user_acc_tab").addClass("side_nav_active");
        $(".user_contact_tab").removeClass("side_nav_active");
        $(".profile_tab").hide();
        $(".account_setting").show();
        $(".userorder_tab").hide();
        $(".user_dashboard").hide();
        $(".contact_dash").hide();
    });
    $(".user_contact_tab").click(function () {
        $(".title-dash").html("Contact Us Dashboard");
        $(".user_dash_tab").removeClass("side_nav_active");
        $(".user_profile_tab").removeClass("side_nav_active");
        $(".user_order_tab").removeClass("side_nav_active");
        $(".user_acc_tab").removeClass("side_nav_active");
        $(".user_contact_tab").addClass("side_nav_active");
        $(".profile_tab").hide();
        $(".account_setting").hide();
        $(".userorder_tab").hide();
        $(".user_dashboard").hide();
        $(".contact_dash").css("display", "flex");
    });
    $(".shipping").click(function () {
        $(".cart_form").css("display","flex");
        $(".cart_payment").hide("slow");
        $(".plus_sign").removeClass("fa-plus");
        $(".plus_sign").addClass("fa-minus");
        $(".paymnet_expand").removeClass("fa-minus");
        $(".paymnet_expand").addClass("fa-plus");
    });
    $(".payment").click(function () {
        $(".cart_form").hide("slow");
        $(".plus_sign").removeClass("fa-minus");
        $(".plus_sign").addClass("fa-plus");
        $(".cart_payment").css("display","flex");
        $(".paymnet_expand").removeClass("fa-plus");
        $(".paymnet_expand").addClass("fa-minus");
    });
});