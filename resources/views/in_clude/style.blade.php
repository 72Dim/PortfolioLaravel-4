@section('style')
<style type="text/css" data-base="CSS-site">

    div, section, ul, li, a, p, span, aside, footer {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    input, textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        border: 1px solid #d2d2d2;
        border-radius: 4px;
        font-size: 16px;
        outline: none;
        transition: border .2s ease-in-out;
    }
    .wrapper{    
        display: flex;
        flex-direction: column;
        /* min-height: 100vh; */
        margin: 0;
        padding: 0;
        width: 100%;
        border: solid 1px black;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .top-information{
        display: block;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        box-sizing: border-box;
        background-color: rgb(217, 223, 255);
    }
    .top-information__inner{
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 32px;
        margin: 0 auto;
        color: chocolate;
    }
    a {
        color: #3e77aa;
        cursor: pointer;
        text-decoration: none;
    }
    .top-information__picture {
        width: 100%;
        max-width: 736px;
        vertical-align: middle;
        text-align: center;
    }
    /* order: 1 */
    .app-header {
        display: block;
        position: sticky;
        top: 0;
        z-index: 100;
    }
    .header--thin {
        position: sticky;
        top: 0;
        /* position: relative; */
        z-index: 100;
        display: block;
    }
    .header {
        display: block;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        background-color: #221f1f;
    }
    .layout {
        padding-left:  8px;
        padding-right: 8px;
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 1600px;
        width: 100%;
        /* adding: 0; */
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .header-layout {
        position: relative;
        height: 72px;
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .header-menu {
        width: 40px;
        height: 40px;
        /* margin-right: 16px; */
        margin-right: 8px;
    }
    .header__button{
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: auto;
        height: 40px;
        margin: 0 16px 0 0;
        padding: 0;
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
        border: none;
        border-radius: 4px;
        background: none;
        transition: all .2s ease-in-out;
    }
    .button{
        cursor: pointer;
    }
    /* .ng-tns-c13-1{
        fill: #fff;
    } */
    .header__logo{
        display: block;
        /* margin-right: 24px; */
        margin-right: 16px;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .button[id='fat-menu']{
        position: relative;
        display: inline-block;
        height: 40px;
        color: #fff;
        background-color: hsla(0,0%,100%,.2);
        text-align: center;
        padding-left: 16px;
        padding-right: 16px;
        margin: 0 16px 0 0;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        font-family: BlinkMacSystemFont,-apple-system,Arial,Segoe UI,Roboto,Helvetica,sans-serif;
        outline: none;
        transition: all .2s ease-in-out;
    }
    .header-search{
        display: block;
        /* flex-grow: 1; */
        margin: 0 24px 0 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .search-form{
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
        width: 514px;
        width: 369px;
        background-color: #122538;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font-size: 75%;
        font: inherit;
        vertical-align: baseline;
    }
    .search-form__inner{
        position: relative;
        display: flex;
        flex-direction: row;
        flex: 1;
        transition: all .25s ease-in-out;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .search-form__input-wrapper{
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
        border-radius: 3px;
        overflow: hidden;
        border-radius: 3px 0 0 3px;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .search-form__back{
        position: absolute;
        left: 0;
        top: 0;
        display: none;
        display: block;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        padding: 0;
        border: none;
        border-radius: 3px 0 0 3px;
        background: #fff;
        cursor: pointer;
        outline: none;
    }
    .search-form__input{
        width: 100%;
        height: 40px;
        box-sizing: border-box;
        border: none;
        border-radius: 0;
        font-size: 15px;
        padding-left: 40px;
        background-image: url(data:image/svg+xml;charset=utf-8,%3Csvg fill='%234E4C4C' height='18' viewBox='0 0 24 24' width='18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath clip-rule='evenodd' d='M10 2a8 8 0 104.906 14.32l5.387 5.387a1 1 0 001.414-1.414l-5.387-5.387A8 8 0 0010 2zm-6 8a6 6 0 1112 0 6 6 0 01-12 0z'/%3E%3C/svg%3E);
        background-repeat: no-repeat;
        background-position: 12px;

    }
    .search-form__microphone{
        position: relative;
        display: flex;
        display: none;
        display: block;
        flex-direction: row;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        padding: 0;
        border: none;
        background: #fff;
        cursor: pointer;
        outline: none;
    }
    .search-form__microphone:before{
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 20px;
        border-left: 1px solid #e9e9e9;
        content: "";
    }
    .search-form__microphone svg{
        fill: #3e77aa;
        cursor: pointer;
    }
    .search-form__submit{
    display: inline-block;
    margin: 0;
    border-radius: 0 3px 3px 0;
    line-height: normal;
    background-color: #00a046;
    color: #fff;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
    border: none;
    border-radius: 4px;
    box-sizing: border-box;
    display: inline-block;
    font-family: BlinkMacSystemFont,-apple-system,Arial,Segoe UI,Roboto,Helvetica,sans-serif;
    margin: 0;
    outline: none;
    padding-left: 16px;
    padding-right: 16px;
    position: relative;
    text-align: center;
    transition: all .2s ease-in-out;
    cursor: pointer;
    }

    ul[class='header-actions']{
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .header-actions__component{
        display: block;
        margin-left: 16px;
    }
    div.header-actions__component.and-img {
        display: inline-flex;
        vertical-align: middle;
        margin-left: 0px;
    }
    .counter--green {
        background: #00a046;
    }
    .counter {
        position: absolute;
        right: 0;
        top: 0;
        transform: translate(20%,-10%);
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        min-width: 20px;
        height: 20px;
        padding-left: 4px;
        padding-right: 4px;
        border-radius: 50px;
        font-size: 12px;
        color: #fff;
    }
    .header-actions_link {
        display: block;
        margin: 0 16px 0 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        border-radius: 4px;
        background-color: hsla(0,0%,100%,.2);
    }
    .absolutely-right {
        position: absolute;
        right: 0;
        margin: 0;
    }
    .server-message {
        position: absolute;
        right: 48px;
        width: 21%;
        height: 40px;
        margin-right: 16px;
        padding-right: 16px;
        color: orange;
    }
    div.message-block {
        padding: 0;
        border: 0;
        color: #00a046;
    }
    .message-top, .message-down {
        height: 20px;
        font-size: 14px;
        text-align: center;
        vertical-align: top;
    }
    div._modal{
        padding-top: 105px;
        background-color: gray;
    }
    .modal-backdrop {
        z-index: -1;
    }
    .modal-backdrop.fade {
        opacity: 0;
    }
    .modal-backdrop.show {
        opacity: .5;
        z-index: 1050;
    }
    div.modal.show {
        display: block;
        opacity: 1;
        z-index: 1050;
    }
    .modal.fade {
        opacity: 0;
    }
    div.container-fluid/*, footer.container-fluid btn-close  */ {
        padding-left: 0px;
        padding-right: 0px;
        background-color: white;
    }
    .alert {
        margin-bottom: 0;
    }
    .alert-success {
        color: #0f5132;
    }
    .alert {
        position: relative;
        padding: 1rem 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        margin-bottom: 0;
        color: #0f5132;
    }
    .card-header{
        position: relative;
        display: flex;
        flex-direction: row;
        flex-shrink: 0;
        align-items: center;
        /* height: 57px; */
        padding-left: 16px;
        padding-right: 68px;
        box-sizing: border-box;
        border-bottom: 1px solid #e9e9e9;
    }
    .card-header >h4{
        margin: 0;
    }
    .modal__close{
        position: absolute;
        display: flex;
        right: 0;
        top: 0;
        width: 46px;
        height: 44px;
        padding: 0;
        border-radius: .25rem;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        outline: none;
        transition: all .2s ease;
        cursor: pointer;
        vertical-align: baseline; 
        background-color: hsla(0,0%,100%,.8);
        z-index: 99;
    }
    button.modal__close:hover {
        background: red;
        color: #ffe; 
    }
    .row{
        margin: 0;
    }
    .card-body{
        max-height: 100%;
        padding: 16px;
        box-sizing: border-box;
        overflow-y: auto;
        margin: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        color: #221f1f;
    }
    .card-body.card-border{
        border-bottom: 1px solid;
        border-bottom-color: silver;
    }
    .card-body-form{
        margin: 0px;
    }
    .cart-list{
        margin: 0 0 16px 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        list-style: none;
    }
    .cart-list_item{
        margin-top: 0;
        padding-top: 0;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .cart-product{
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        opacity: 1;
    }
    .cart-product__body{
        position: relative;
        display: flex;
        flex-direction: row;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .cart-product__picture{
        color: #3e77aa;
        cursor: pointer;
        text-decoration: none;
        display: flex;
        flex-direction: row;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        width: 96px;
        height: 96px;
        margin-right: 16px;
    }
    .cart-product__main{
        flex-grow: 1;
        margin: 0;
        padding-left: 8px;
        border: 0;
        font-size: 100%;
        font: inherit;
        font-size: 14px;
        text-decoration: none;
        vertical-align: baseline;
        color: #221f1f;
        background-color: hsla(0,0%,100%,.9);
    }
    .cart-product__title{
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        color: #221f1f;
    }
    [aria-controls="cartProductActions0"]{ /*button в cart-product__main*/
        position: relative;
        display: flex;
        display: inline-block;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        padding: 0;
        margin: 0;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        text-decoration: none;
        text-align: center;
        outline: none;
        transition-duration: .2s;
        transition-timing-function: ease-in-out;
        transition-property: color,background-color,border-color;
        font-family: BlinkMacSystemFont,-apple-system,Arial,Segoe UI,Roboto,Helvetica,sans-serif;
    }
    [aria-controls="cartProductActions0"] svg{
        fill: #3e77aa;
        transition-duration: .2s;
        transition-property: fill;
        transition-timing-function: ease-in-out;
    }
    .cart-product__footer{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-top: 16px;
        padding-bottom: 16px;
        justify-content: flex-end;
        padding-top: 0;
        padding-bottom: 0;
        padding-left: 112px;
        box-sizing: border-box;
        margin: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .cart-price{
        display: block;
        height: 40px;
        margin: 0 auto;
        padding-top: 0.5rem;
        vertical-align: middle;
    }
    .cart-price::before{
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
    }
    .cart-price p {
        display: inline-block;
        vertical-align: middle;
    }
    .cart-price span {
        padding: 0 5px;
    }
    .cart-product__coast{
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: right;
        margin-left: auto;
        width: 28%;
        margin-left: 0;
    }
    /*.cart-product__price{*/               /* cart-product_sum   cart-product__coast ng-star-inserted */
    .cart-product_sum{
        /* display: flex; */
        flex-direction: column;
        justify-content: center;
        text-align: right;
        margin-left: auto;
        font-size: 20px;
        white-space: nowrap;
        margin: 0;
        padding: 0 5px 0 5px;
        border: 0;
        vertical-align: baseline;
    }
    .cart-product_sum--red{
        color: #f84147;
    }
    .cart-product_counter{
        font: inherit;
    }
    /*  xx-small	x-small	small	medium	large	x-large	xx-large  */
    .cart-counter{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .cart-counter button, input {
        height: 40px;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
    }
    button.button_size_xx_large {       /* cart-product__price cart-product__price--red  */
        font-size: xx-large;
    }
    .cart-counter__button{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        padding: 0;
        font-size: 16px;
        line-height: 40px;
        background-color: transparent;
        background-color: #eee;
    }
    button.button_color_white {
        padding-left:  0;
        padding-right: 0;
        background-color: hsla(0,0%,100%,.9);
        color: #221f1f;
    }
    .button_size_medium {
        font-size: 16px;
        height: 40px;
        line-height: 40px;
    }
    .cart-counter__input{
        width: 56px;
        height: 40px;
        margin-left: 4px;
        margin-right: 4px;
        text-align: center;
        background-color: #fff;
        box-sizing: border-box;
        padding-left: 12px;
        padding-right: 12px;
    }
    input.cart-counter__input:disabled {
        background-color: rgba(0, 0, 0, .03);
        color: black;
        opacity: 1;
    }

    .cart-services {
        position: relative;
        top: -40px;
        margin: 0;
        padding: 0;
        padding-left: 112px;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .cart-services button{
        width: auto;
        margin-top: -40px;
        align-items: center;
        display: flex;
        flex-direction: row;
        justify-content: center;
        background: none;
        border: none;
        color: #3e77aa;
        cursor: pointer;
        margin: 0;
        padding: 0;
        text-decoration: none;
        font-size: 16px;
        height: 40px;
        line-height: 40px;
    }
    .cart-footer {
        position: sticky;
        bottom: -16px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        padding-top: 16px;
        padding-bottom: 16px;
        background-color: #fff;
        margin: 0;
        padding: 0;
        border: 0;
        border-radius: 4px;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    [data-testid="continue-shopping-link"]{
        line-height: normal;
        background-color: #f5f5f5;
        box-shadow: inset 0 0 0 1px #ebebeb;
        color: #3e77aa;
        font-size: 16px;
        height: 40px;
        line-height: 40px;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        display: inline-block;
        font-family: BlinkMacSystemFont,-apple-system,Arial,Segoe UI,Roboto,Helvetica,sans-serif;
        margin: 0;
        outline: none;
        padding-left: 16px;
        padding-right: 16px;
        position: relative;
        text-align: center;
        transition-duration: .2s;
        transition-property: color,background-color,border-color;
        transition-timing-function: 
    }
    .cart-receipt {
        display: flex;
        /* flex-direction: column; */
        flex-direction: row;
        width: auto;
        padding: 16px;
        margin-left: auto;
        align-items: center;
        /* width: 100%; */
        /* font-size: 100%; */
        font: inherit;
        border-radius: 4px;
        vertical-align: baseline;
        border: 1px solid #00a046;
        background-color: rgba(0,160,70,.1);
    }
    .cart-receipt_order {
        width: auto;
        margin-right: 24px;
        margin-bottom: 0;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        /* width: 100%;
        margin-bottom: 16px; */
        /* margin: 0; */
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .cart-receipt_order-label {

    }
    .cart-receipt_order-sum {
        font-size: 32px;
        /* margin-left: 0; */
        margin: 0;
        padding: 0;
        border: 0;
        /* font-size: 100%;
        font: inherit; */
        vertical-align: baseline;
        color: black;
    }
    .cart-receipt_order-sum-as-number {
        
    }
    .cart-receipt_order-currency {
        
    }
    .cart-receipt_order-submit {
    /* .cart-receipt__submit { */
        width: auto;
        color: #fff;
        font-size: 16px;
        height: 38px;
        line-height: 38px;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        display: inline-block;
        font-family: BlinkMacSystemFont,-apple-system,Arial,Segoe UI,Roboto,Helvetica,sans-serif;
        margin: 0;
        outline: none;
        padding-left: 16px;
        padding-right: 16px;
        position: relative;
        text-align: center;
        transition-duration: .2s;
        transition-property: color,background-color,border-color;
        transition-timing-function: ease-in-out;
        background-color: #00a046;
    }
    .cart-dummy {
        text-align: center;
    }
    .portal-section {
        display: block;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        margin-bottom: 48px;
    }
    .portal-section__heading {
        margin-bottom: 16px;
        font-size: 24px;
        margin: 0 0 0.5rem 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        text-align: center;
        vertical-align: baseline;
    }
    .portal-categ_names { /* ul */
        list-style: none;
        display: flex;
        /* flex-wrap: wrap; */
        flex-direction: row;
        /* flex-direction: column; */
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .portal-categ_name{
        /* width: 16.66667%; */
        /* width: 100%; */
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .category_card{
        height: 100%;
        padding-right: 16px;
        border-right: 1px solid #e9e9e9;
        margin: 0;
        /* padding: 0; */
        border: 0;
        font-size: 100%;
        font: inherit;
        text-align: center;
        vertical-align: baseline;
    }
    .category_card_img{
        position: relative;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        /* justify-content: center; */
        max-height: 500px;
        /* margin-bottom: 16px; */
        cursor: pointer;
        text-decoration: none;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .category_card_img::before{
        /* content: "";
        display: block;
        width: 100%;
        padding-top: 75%; */
    }
    .categ_saver{
        /* position: absolute; */
        /* top: 0;
        left: 0; */
        width: 100%;
        /* height: 100%; */
        height: 168px;
        object-fit: contain;
        object-position: center;
        margin: 0;
        padding: 0;
        border: 0;
        border-radius: 0.25rem;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .btn-primary {
        /* color: #fff; */
        color: yellowgreen;
    }
    .categ_name{
        position: relative;
        width: -webkit-fill-available;
        height: 100%;
        margin: 0;
        padding: 0 0 4px 0;
        vertical-align: middle;
        text-align: center;
    }
    .product_name{

    }
    main {
        display: block;
        font-size: 100%;
        font: inherit;
    }
    .layout_category, .layout_product, .layout_startPage {
        box-sizing: border-box;
        display: block;
        width: 100%;
        margin: 0 auto;
        max-width: 1600px;
        padding-left:  24px;
        padding-right: 24px;
        /* border: 0; */
        border: 1px solid black;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .breadcrumbs {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        /* margin-top: 16px;
        margin-bottom: 8px; */
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        list-style: none;
    }
    .breadcrumbs__item {
        position: relative;
        margin-top: 8px;
        margin-bottom: 8px;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .breadcrumbs__item--home,
    .breadcrumbs__item--last {
        display: flex;
        flex-direction: row;
    }
    .breadcrumbs__link {
        display: flex;
        /* flex-direction: row; */
        align-items: center;
        font-size: 14px;
        line-height: 16px;
        color: #3e77aa;
        cursor: pointer;
        text-decoration: none;
        margin: 0;
        padding: 0;
        border: 0;
        vertical-align: baseline;
    }
    .breadcrumbs__icon-home {
        width: 16px;
        height: 16px;
        fill: currentColor;
    }
    .breadcrumbs__icon-chevron {
        width: 16px;
        height: 12px;
        margin-left: 8px;
        margin-right: 0;
        /* transform: rotate(-90deg); */
        fill: #d2d2d2;
        fill: currentColor;
    }
    .layout_catgname {
        display: block;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .catalog-heading {
        font-size: 28px;
        /* line-height: 42px; */
        margin-bottom: 24px;
    }
    .catalog {
        position: relative;
        top: -65px;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        margin-bottom: 64px;
    }
    .catalog_layout{
        position: sticky;
        display: block;
        width: 351px;
        height: 65px;
        margin-left: auto;
        padding-left: 24px;
        padding-right: 24px;
        z-index: 21;
        transition: .22s ease-in-out;
    }
    .catalog-settings {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        padding-top: 16px;
        padding-bottom: 16px;
        border-bottom: 1px solid #e9e9e9;
        border-bottom: 1px solid #00a046;
        background-color: #fff;
    }
    .catalog-settings__sorting {
        position: relative;
        margin-left: auto;
        margin-right: 16px;
        width: 50%;
        width: auto;
    }
    .select-css { /*currentColor*/
        align-items: center;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #3e77aa;
        border-color: #3e77aa;
        background-color: #fff;
        background-position: right 12px center;
        /* background-image: url(data:image/svg+xml;charset=utf-8,%3Csvg fill='%233e77aa' viewBox='0 0 13 7' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M6.5 7a.956.956 0 0 1-.657-.256l-5.57-5.25a.839.839 0 0 1 0-1.237.968.968 0 0 1 1.312 0L6.5 4.888 11.415.257a.968.968 0 0 1 1.313 0 .839.839 0 0 1 0 1.237l-5.572 5.25A.956.956 0 0 1 6.5 7Z'/%3E%3C/svg%3E);*/
        background-image: url('data:image/svg+xml;charset=utf-8,<svg fill="rgb(234,49,16)" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-chevron-down"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>');
        background-repeat: no-repeat,repeat;
        background-size: 16px 12px;
        border: 1px solid #d2d2d2;
        border-radius: 4px;
        box-sizing: border-box;
        color: #221f1f;
        cursor: pointer;
        display: inline-flex;
        font-size: 14px;
        height: 32px;
        margin: 0;
        max-width: 100%;
        overflow: hidden;
        padding-left: 12px;
        padding-right: 40px;
        text-align: left;
        width: 100%;
    }
    .catalog-settings__view {
        display: block;
    }
    .catalog-view__switch {
        display: flex;
        flex-direction: row;
    }
    .catalog-view__button{ /*:first-child {*/
        border-right: 0;
        border-color: #3e77aa;
        background-color: #3e77aa;
    }
    .catalog-view__button {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 32px;
        border-right: 0;
        border-color: #3e77aa;
        background-color: #3e77aa;
        border: 1px solid #d2d2d2;
        text-align: center;
        /* background-color: #fff; */
    }
    .left-button{
        cursor: default;
        border-radius: 4px 0 0 4px;
    }
    .right-button {
        cursor: default;
        border-radius: 0 4px 4px 0;
        border-left: 1px solid #d2d2d2;
    }
    .layout_with_sidebar {
        display: flex;
        flex-direction: row-reverse;
    }
    .content_type_catalog {
        display: block;
        width: calc(100% - 250px);
        border: 1px solid red;
    }
    .catalog-grid {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        list-style: none;
    }
    .catalog-grid__cell {
        border-bottom: 1px solid #e9e9e9;
        border-right: 1px solid #e9e9e9;
        box-sizing: border-box;
        position: relative;
        width: 50%;
    }
    .goods-tile {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .display-none, .hidden { /*скрытый*/
        display: none;
    }
    .goods-tile__inner {
        min-height: 100%;
        padding: 8px;
        box-sizing: border-box;
        background-color: #fff;
    }
    .goods-tile__label {
        position: absolute;
        top: 8px;
        left: 8px;
        z-index: 5;
        height: 16px;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 8px;
        line-height: 16px;
    }
    element.style {
        background-color: rgb(255, 169, 0);
        color: rgb(255, 255, 255);
    }
    .goods-tile__label {
        left: 16px;
    }
    .goods-tile__label {
        height: 24px;
        padding-left: 8px;
        padding-right: 8px;
        font-size: 12px;
        line-height: 24px;
    }
    .goods-tile__label {
        position: absolute;
        top: 8px;
        left: 8px;
        z-index: 5;
        height: 16px;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 8px;
        line-height: 16px;
    }
    .goods-tile__label {
        left: 16px;
    }
    .goods-tile__label {
        height: 24px;
        padding-left: 8px;
        padding-right: 8px;
        font-size: 12px;
        line-height: 24px;
    }
    .goods-tile__label {
        position: absolute;
        top: 8px;
        left: 8px;
        z-index: 5;
        height: 16px;
        padding-left: 4px;
        padding-right: 4px;
        font-size: 8px;
        line-height: 16px;
    }
    .promo-label--yellow, .promo-label_type_popularity, .promo-label_type_top_brand {
        background-color: #ffa900;
    }
    .promo-label {
        background-color: rgb(255, 169, 0);
        border-radius: 50px;
        color: #fff;
        display: inline-block;
        font-family: Rozetka,BlinkMacSystemFont,-apple-system,Arial,Segoe UI,Roboto,Helvetica,sans-serif;
        font-family: Arial,Helvetica,sans-serif;
        font-weight: 700;
        text-transform: uppercase;
    }
    .goods-tile__actions {
        position: absolute;
        right: 8px;
        top: 8px;
        z-index: 5;
    }
    .goods-tile__picture {
        position: relative;
        display: block;
        width: 100%;
        margin-bottom: 8px;
        overflow: hidden;
    }
    a {
        color: #3e77aa;
        cursor: pointer;
        text-decoration: none;
    }
    a:hover {
        color: #f84147;
        text-decoration: underline;
    }
    .goods-tile__picture:before {
        display: block;
        padding-top: 66%;
        padding-bottom: 66%;
        content: "";
    }
    .goods-tile__picture>img {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        max-width: 100%;
        max-height: 100%;
    }
    .goods-tile__colors {
        height: 20px;
        margin-bottom: 8px;
    }
    .goods-tile__heading {
        display: block;
    }
    .goods-tile__title {
        display: block;
        /* height: 32px; */
        margin-bottom: 8px;
        overflow: hidden;
        font-size: 12px;
        line-height: 16px;
        color: #221f1f;
    }
    .goods-tile__rating, .goods-tile__stars {
        position: relative;
        display: flex;
        flex-direction: row;
    }
    .goods-tile__rating {
        height: 16px;
        margin-bottom: 8px;
    }
    .goods-tile__reviews-link {
        display: flex;
        flex-direction: row;
        padding-left: 5px;
        align-items: center;
        font-size: 12px;
    }
    .goods-tile__price--old {
        position: relative;
        height: 18px;
        font-size: 14px;
    }
    .price--gray {
        color: #797878;
        text-decoration: line-through;
    }
    .goods-tile__price {
        display: flex;
        flex-direction: row;
        white-space: nowrap;
        justify-content: space-between;
    }
    .price--red {
        color: #f84147;
    }
    .goods-tile__price-value {
        display: inline-block;
        font-size: 20px;
    }
    .goods-tile__price-currency {
        align-self: flex-end;
        display: inline-block;
        margin-left: 2px;
        font-size: 16px;
    }
    .goods-tile__buy-button {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 32px;
        height: 32px;
        margin: 0 0 0 auto;
        padding: 0;
        border: none;
        background-color: #fff;
        border-radius: 4px;
    }
    .goods-tile__availability--available {
        color: #00a046;
    }
    .goods-tile__availability {
        margin-bottom: 4px;
        font-size: 12px;
    }
    .goods-tile__promo {
        margin-bottom: 12px;
    }
    /* <aside> */
    .sidebar {
        display: block;
        flex-shrink: 0;
        width: 250px;
    }
    .sidebar-block {
        padding-left: 8px;
        padding-right: 8px;
        border-right: 1px solid #e9e9e9;
        border-bottom: 1px solid #e9e9e9;
    }
    .sidebar-block__toggle {
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
        padding: 8px;
        text-align: left;
        background: none;
        border: none;
        font-size: 14px;
        color: #3e77aa;
        cursor: pointer;
    }
    .sidebar-block__toggle-title {
        margin-right: 16px;
    }
    .sidebar-block__inner {
        padding-bottom: 21px;
        overflow-y: hidden;
        max-height: 999px;
    }
    .sidebar-search {
        position: relative;
        width: 100%;
        padding-left: 8px;
        padding-right: 8px;
        margin-top: 8px;
        margin-bottom: 8px;
    }
    .sidebar-search__input {
        width: 100%;
    }
    input{
        height: 32px;
    }
    input {
        background-color: #fff;
        box-sizing: border-box;
        padding-left: 12px;
        padding-right: 12px;
        border: 1px solid #d2d2d2;
    }
    ul.menu-categories .menu-categories_type_main {
        list-style: none;
    }
    .menu-categories__item {
        list-style: none;
    }
    .menu-categories__link {
    position: relative;
    display: block;
    padding-top: 8px;
    /* padding-top: calc(var(--global-spacer)* 2); */
    padding-bottom: 8px;
    padding-left: 32px;
    padding-right: 8px;
    border-radius: 4px;
    font-size: 14px;                /* 1em */
    color: black;
    text-decoration: none;
    transition: all .2s ease;
    }
    *, :after, :before {
        box-sizing: border-box;
    }
    .menu-categories__link::before {
        content: "";
        position: absolute;
        top: 5px;
        left: 0;
        width: 24px;
        height: 24px;
        top: 10px; /* 4px */
        left: 8px;
        width: 16px;
        height: 16px;
        border: 1px solid grey;
        border-radius: 4px;
        background-color: #fff;
        transition-property: background-color, border-color;
        transition-duration: .2s;
        transition-timing-function: ease-in-out;
    }
    .menu-categories__link:hover:active {
        background-color: #a1d8b6;
        text-decoration: none;
        color: black;
    }

/* @media (hover: hover) */
    .menu-categories__link:hover {
        background-color: #a1d8b6;;
        text-decoration: none;
        color: #333;
    }


    .menu-categories__icon {
        font-size: 0.75em;
        font-weight: 400;
        /* color: var(--global-black-40); */
        /* color: lightgray; */
        color: #a6a5a5;
    }

    .sidebar-alphabet__toggle:hover {
        text-decoration: none;
    }
    .button--link:hover, .button_type_link:hover {
        color: #ff7878;
    }
    button.button, input.button {
        line-height: normal;
    }
    .sidebar-alphabet__toggle {
        font-size: 14px;
        margin-bottom: 8px;
    }
    .button_type_link {
        background: none;
        border: none;
        color: #3e77aa;
        cursor: pointer;
        margin: 0;
        padding: 0;
        text-decoration: none;
    }
    .button {
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        display: inline-block;
        font-family: BlinkMacSystemFont,-apple-system,Arial,Segoe UI,Roboto,Helvetica,sans-serif;
        margin: 0;
        outline: none;
        padding-left: 16px;
        padding-right: 16px;
        position: relative;
        text-align: center;
        transition-duration: .2s;
        transition-property: color,background-color,border-color;
        transition-timing-function: ease-in-out;
    }
    .scrollbar__inner{

    }
    .scrollbar__layout{
        display: none;
    }
        
    .tit-le {
        width: 100%;
        text-align: center;
    }
    .ma-in {
        width: 100%;
    }
    .header {
        
    }
    .ma-in_con-tent {
        
    }
    .form-check-label {
        margin-left: 0.5em
    }
    .modal-open_login, .modal-open_register, .modal-open_cart  {
        overflow: hidden;
        /* padding-right: 11px; */
    }
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 740px;
            margin: 0rem auto;
        }
    }
    /* stylePaginationSection.blade --------------------------- */
    
    .active {
        background-color: #0d6efd;
        color: white
        /* background-color: #0a58ca; */
    }
    *:disabled {    /* любой элемент с псевдоклассом disabled */
        background-color: dimgrey;
        color: linen;
        opacity: 1;
    }
    
</style>