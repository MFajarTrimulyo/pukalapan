<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('public/css/style.csss')}}" />
  </head>
  <style>
  .desktop {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    position: relative;
  }
  
  .desktop .conten {
    display: flex;
    flex-direction: column;
    width: 1440px;
    align-items: center;
    padding: 0px 0px 96px;
    position: relative;
    flex: 0 0 auto;
    background-color: var(--basewhite);
  }
  
  .desktop .frame {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .frame-wrapper {
    display: flex;
    flex-direction: column;
    width: 1440px;
    align-items: center;
    gap: 4px;
    padding: 4px;
    position: relative;
    flex: 0 0 auto;
    background-color: #874b29;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    border-color: #98a1b233;
  }
  
  .desktop .div-wrapper {
    display: flex;
    width: 1280px;
    align-items: center;
    gap: 408px;
    padding: 0px 32px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .div {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    flex: 1;
    flex-grow: 1;
  }
  
  .desktop .badge-group {
    align-items: center;
    gap: 8px;
    padding: 4px 10px 4px 4px;
    border-radius: 16px;
    mix-blend-mode: multiply;
    display: inline-flex;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .badge {
    align-items: flex-start;
    background-color: #ffffff;
    display: inline-flex;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .badge-base {
    align-items: center;
    justify-content: center;
    padding: 2px 8px;
    background-color: var(--ros-50);
    border-radius: 16px;
    display: inline-flex;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .text {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--text-xs-medium-font-family);
    font-weight: var(--text-xs-medium-font-weight);
    color: #000000;
    font-size: var(--text-xs-medium-font-size);
    text-align: center;
    letter-spacing: var(--text-xs-medium-letter-spacing);
    line-height: var(--text-xs-medium-line-height);
    white-space: nowrap;
    font-style: var(--text-xs-medium-font-style);
  }
  
  .desktop .div-2 {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .message {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--text-xs-medium-font-family);
    font-weight: var(--text-xs-medium-font-weight);
    color: var(--gray-700);
    font-size: var(--text-xs-medium-font-size);
    letter-spacing: var(--text-xs-medium-letter-spacing);
    line-height: var(--text-xs-medium-line-height);
    white-space: nowrap;
    font-style: var(--text-xs-medium-font-style);
  }
  
  .desktop .frame-2 {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .united-states-daniel {
    position: relative;
    width: 24px;
    height: 16px;
  }
  
  .desktop .text-wrapper {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--text-xs-medium-font-family);
    font-weight: var(--text-xs-medium-font-weight);
    color: #000000;
    font-size: var(--text-xs-medium-font-size);
    letter-spacing: var(--text-xs-medium-letter-spacing);
    line-height: var(--text-xs-medium-line-height);
    white-space: nowrap;
    font-style: var(--text-xs-medium-font-style);
  }
  
  .desktop .chevron-down {
    position: relative;
    width: 16px;
    height: 16px;
  }
  
  .desktop .header-section {
    flex-direction: column;
    width: 1440px;
    background-color: var(--gray-50);
    display: flex;
    align-items: center;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .container {
    align-items: center;
    gap: 32px;
    display: flex;
    flex-direction: column;
    width: 1280px;
    padding: 0px 32px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .header-wrapper {
    display: flex;
    flex-direction: column;
    width: 1248px;
    height: 80px;
    align-items: flex-start;
    justify-content: space-around;
    position: relative;
    margin-left: -16px;
    margin-right: -16px;
  }
  
  .desktop .header {
    width: 1248px;
    gap: 87px;
    padding: 18px 0px 18px 18px;
    background-color: transparent;
    display: flex;
    align-items: center;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .frame-3 {
    display: inline-flex;
    align-items: center;
    gap: 5.7px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .logomark {
    position: relative;
    width: 30.6px;
    height: 30.6px;
  }
  
  .desktop .overlap-group {
    position: relative;
    width: 32px;
    height: 32px;
    top: -1px;
    left: -1px;
  }
  
  .desktop .isometric-square {
    position: absolute;
    width: 22px;
    height: 22px;
    top: 8px;
    left: 8px;
    background-color: var(--blue-500);
    border-radius: 4px;
    transform: rotate(-15deg);
  }
  
  .desktop .isometric-square-2 {
    position: absolute;
    width: 22px;
    height: 22px;
    top: 2px;
    left: 2px;
    background-color: var(--blue-700);
    border-radius: 4px;
    transform: rotate(-15deg);
  }
  
  .desktop .text-wrapper-2 {
    position: relative;
    width: fit-content;
    margin-top: -0.3px;
    font-family: "Poppins-SemiBold", Helvetica;
    font-weight: 600;
    color: #1d2939;
    font-size: 23.8px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .desktop .frame-4 {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 10px 12px 10px 16px;
    position: relative;
    flex: 1;
    flex-grow: 1;
    background-color: var(--gray-25);
    border-radius: 8px;
    border: 1px solid;
    border-color: var(--gray-300);
  }
  
  .desktop .frame-5 {
    display: inline-flex;
    align-items: center;
    gap: 20px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .text-wrapper-3 {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--text-sm-normal-font-family);
    font-weight: var(--text-sm-normal-font-weight);
    color: var(--gray-700);
    font-size: var(--text-sm-normal-font-size);
    letter-spacing: var(--text-sm-normal-letter-spacing);
    line-height: var(--text-sm-normal-line-height);
    white-space: nowrap;
    font-style: var(--text-sm-normal-font-style);
  }
  
  .desktop .img {
    position: relative;
    width: 20px;
    height: 20px;
  }
  
  .desktop .rectangle {
    position: relative;
    align-self: stretch;
    width: 1px;
    background-color: var(--gray-300);
  }
  
  .desktop .i-m-looking-for {
    position: relative;
    width: fit-content;
    font-family: var(--text-sm-normal-font-family);
    font-weight: var(--text-sm-normal-font-weight);
    color: var(--gray-400);
    font-size: var(--text-sm-normal-font-size);
    letter-spacing: var(--text-sm-normal-letter-spacing);
    line-height: var(--text-sm-normal-line-height);
    white-space: nowrap;
    font-style: var(--text-sm-normal-font-style);
  }
  
  .desktop .search-lg {
    position: relative;
    width: 24px;
    height: 24px;
  }
  
  .desktop .featured-icon {
    position: relative;
    width: 40px;
    height: 40px;
    background-color: var(--gray-200);
    border-radius: 20px;
  }
  
  .desktop .img-2 {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 10px;
    left: 10px;
  }
  
  .desktop .frame-6 {
    display: flex;
    width: 1438px;
    height: 91px;
    align-items: center;
    gap: 8px;
    padding: 24px 47px 24px 0px;
    position: relative;
  }
  
  .desktop .component {
    position: relative;
    width: 65px;
    height: 64px;
    margin-top: -10.5px;
    margin-bottom: -10.5px;
    background-color: #ffffff;
    border-radius: 32.5px/32px;
  }
  
  .desktop .icon-menu {
    position: absolute;
    width: 34px;
    height: 33px;
    top: 15px;
    left: 15px;
  }
  
  .desktop .img-wrapper {
    position: relative;
    width: 24px;
    height: 24px;
    background-color: var(--gray-100);
    border-radius: 12px;
  }
  
  .desktop .img-3 {
    position: absolute;
    width: 12px;
    height: 12px;
    top: 6px;
    left: 6px;
  }
  
  .desktop .frame-7 {
    display: flex;
    width: 1216px;
    align-items: center;
    gap: 8px;
    position: relative;
    margin-top: -3px;
    margin-bottom: -3px;
  }
  
  .desktop .frame-8 {
    display: flex;
    width: 170px;
    height: 49px;
    align-items: center;
    gap: 11px;
    padding: 8px 12px;
    position: relative;
    background-color: var(--basewhite);
    border-radius: 8px;
    border: 1px solid;
    border-color: var(--gray-100);
  }
  
  .desktop .group {
    position: relative;
    width: 31px;
    height: 32px;
    background-color: #f2f4f7;
    border-radius: 15.5px/16px;
  }
  
  .desktop .icon-book {
    position: absolute;
    width: 16px;
    height: 16px;
    top: 8px;
    left: 7px;
  }
  
  .desktop .text-wrapper-4 {
    position: relative;
    width: fit-content;
    font-family: var(--text-sm-medium-font-family);
    font-weight: var(--text-sm-medium-font-weight);
    color: #000000;
    font-size: var(--text-sm-medium-font-size);
    letter-spacing: var(--text-sm-medium-letter-spacing);
    line-height: var(--text-sm-medium-line-height);
    white-space: nowrap;
    font-style: var(--text-sm-medium-font-style);
  }
  
  .desktop .frame-9 {
    display: flex;
    align-items: center;
    gap: 11px;
    padding: 8px 12px;
    position: relative;
    flex: 1;
    flex-grow: 1;
    background-color: var(--basewhite);
    border-radius: 8px;
    border: 1px solid;
    border-color: var(--gray-100);
  }
  
  .desktop .history-icon-wrapper {
    position: relative;
    width: 32px;
    height: 31px;
    background-color: #f2f4f7;
    border-radius: 16px/15.5px;
  }
  
  .desktop .history-icon {
    position: absolute;
    width: 18px;
    height: 17px;
    top: 6px;
    left: 7px;
  }
  
  .desktop .icon-comment-square-wrapper {
    position: relative;
    width: 34px;
    height: 32px;
    background-color: #f2f4f7;
    border-radius: 17px/16px;
  }
  
  .desktop .icon-comment-square {
    position: absolute;
    width: 15px;
    height: 15px;
    top: 9px;
    left: 9px;
  }
  
  .desktop .banner {
    position: relative;
    width: 1440px;
    height: 658px;
    background-color: #ffffff;
  }
  
  .desktop .overlap {
    position: relative;
    height: 658px;
    background-image: url(./img/background.png);
    background-size: cover;
    background-position: 50% 50%;
  }
  
  .desktop .rectangle-2 {
    position: absolute;
    width: 1440px;
    height: 658px;
    top: 0;
    left: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.7) 1.56%, rgba(135, 75, 41, 0) 100%);
  }
  
  .desktop .text-wrapper-5 {
    position: absolute;
    width: 672px;
    top: 153px;
    left: 102px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 80px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .desktop .icon-reading {
    position: absolute;
    width: 558px;
    height: 658px;
    top: 0;
    left: 820px;
    background-blend-mode: hard-light;
  }
  
  .desktop .mulai-baca {
    position: absolute;
    width: 217px;
    height: 69px;
    top: 470px;
    left: 102px;
  }
  
  .desktop .overlap-group-2 {
    position: relative;
    width: 215px;
    height: 69px;
    border-radius: 20px;
  }
  
  .desktop .text-wrapper-6 {
    position: absolute;
    width: 120px;
    top: 21px;
    left: 48px;
    text-shadow: 0px 4px 5px #00000040;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 18px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .desktop .rectangle-3 {
    position: absolute;
    width: 215px;
    height: 69px;
    top: 0;
    left: 0;
    border-radius: 20px;
    border: 2px solid;
    border-color: #ffffff;
  }
  
  .desktop .tidak-ada-teman-yang {
    position: absolute;
    width: 444px;
    top: 354px;
    left: 102px;
    font-family: "Inter-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 28px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .desktop .isi-conten {
    display: flex;
    flex-direction: column;
    width: 1440px;
    align-items: center;
    position: relative;
    flex: 0 0 auto;
    background-color: var(--gray-700);
  }
  
  .desktop .section {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 64px;
    position: relative;
    align-self: stretch;
    width: 100%;
    flex: 0 0 auto;
    background-color: var(--basewhite);
  }
  
  .desktop .contact-page-header {
    display: flex;
    flex-direction: column;
    width: 1440px;
    align-items: center;
    position: relative;
    flex: 0 0 auto;
    background-color: var(--basewhite);
  }
  
  .desktop .section-2 {
    padding: 0px 0px 96px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 64px;
    position: relative;
    align-self: stretch;
    width: 100%;
    flex: 0 0 auto;
    background-color: var(--basewhite);
  }
  
  .desktop .container-2 {
    align-items: flex-start;
    gap: 64px;
    display: flex;
    flex-direction: column;
    width: 1280px;
    padding: 0px 32px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .frame-10 {
    display: inline-flex;
    flex-direction: column;
    height: 1002.93px;
    align-items: flex-start;
    justify-content: space-between;
    position: relative;
  }
  
  .desktop .text-wrapper-7 {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--display-sm-semibold-font-family);
    font-weight: var(--display-sm-semibold-font-weight);
    color: var(--gray-800);
    font-size: var(--display-sm-semibold-font-size);
    letter-spacing: var(--display-sm-semibold-letter-spacing);
    line-height: var(--display-sm-semibold-line-height);
    white-space: nowrap;
    font-style: var(--display-sm-semibold-font-style);
  }
  
  .desktop .frame-11 {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 44px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .frame-12 {
    display: flex;
    width: 1208px;
    height: 475px;
    align-items: flex-start;
    gap: 32px;
    position: relative;
  }
  
  .desktop .card-horizontal {
    display: flex;
    width: 280px;
    align-items: flex-start;
    gap: 4px;
    padding: 8px;
    position: relative;
    border-radius: 8px;
  }
  
  .desktop .product {
    flex: 1;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: relative;
  }
  
  .desktop .product-card {
    gap: 9px;
    align-self: stretch;
    width: 100%;
    flex: 0 0 auto;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: relative;
  }
  
  .desktop .overlap-group-wrapper {
    position: relative;
    align-self: stretch;
    width: 100%;
    height: 243.77px;
    background-color: #f6f7fb;
  }
  
  .desktop .buku-wrapper {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image.png);
    background-size: 100% 100%;
  }
  
  .desktop .buku {
    position: absolute;
    width: 163px;
    height: 207px;
    top: 19px;
    left: 51px;
  }
  
  .desktop .frame-13 {
    display: flex;
    flex-direction: column;
    height: 187.68px;
    align-items: flex-start;
    gap: 15.12px;
    position: relative;
    align-self: stretch;
    width: 100%;
  }
  
  .desktop .frame-14 {
    display: flex;
    align-items: flex-start;
    position: relative;
    align-self: stretch;
    width: 100%;
    flex: 0 0 auto;
  }
  
  .desktop .frame-15 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 7.56px;
    position: relative;
    flex: 1;
    flex-grow: 1;
  }
  
  .desktop .p {
    position: relative;
    width: 247.65px;
    margin-top: -0.95px;
    margin-right: -6.33px;
    font-family: "Inter-SemiBold", Helvetica;
    font-weight: 600;
    color: var(--typehigh-emphasis);
    font-size: 18.9px;
    letter-spacing: 0;
    line-height: 28.4px;
  }
  
  .desktop .text-wrapper-8 {
    width: 247.65px;
    height: 18.9px;
    margin-right: -6.33px;
    font-family: "Inter-Regular", Helvetica;
    font-weight: 400;
    color: var(--typelow-emphasis);
    font-size: 13.2px;
    line-height: 18.9px;
    position: relative;
    letter-spacing: 0;
    white-space: nowrap;
  }
  
  .desktop .ratings {
    display: inline-flex;
    align-items: flex-end;
    gap: 15.12px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .icon-star {
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .text-wrapper-9 {
    position: relative;
    width: fit-content;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: var(--primary);
    font-size: 13.2px;
    letter-spacing: 0;
    line-height: 17px;
    white-space: nowrap;
  }
  
  .desktop .icon-wishlist {
    position: relative;
    width: 22.69px;
    height: 22.69px;
  }
  
  .desktop .button {
    display: flex;
    height: 50.29px;
    gap: 7.56px;
    padding: 9.45px 17.01px;
    align-self: stretch;
    width: 100%;
    border-radius: 7.56px;
    border: 0.95px solid;
    box-shadow: 0px 0.95px 1.89px #1018280d;
    align-items: center;
    justify-content: center;
    position: relative;
    background-color: var(--basewhite);
    overflow: hidden;
    border-color: var(--gray-300);
  }
  
  .desktop .text-2 {
    position: relative;
    width: fit-content;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: var(--gray-700);
    font-size: 15.1px;
    letter-spacing: 0;
    line-height: 22.7px;
    white-space: nowrap;
  }
  
  .desktop .icon-cart {
    position: absolute;
    width: 23px;
    height: 21px;
    top: 115px;
    left: 25px;
  }
  
  .desktop .overlap-group-3 {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image-8.png);
    background-size: 100% 100%;
  }
  
  .desktop .overlap-group-4 {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image-2.png);
    background-size: 100% 100%;
  }
  
  .desktop .product-wrapper {
    display: flex;
    width: 280px;
    align-items: flex-start;
    gap: 4px;
    padding: 8px;
    position: relative;
    margin-right: -8px;
    border-radius: 8px;
  }
  
  .desktop .overlap-group-5 {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image-6.png);
    background-size: 100% 100%;
  }
  
  .desktop .overlap-group-6 {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image-4.png);
    background-size: 100% 100%;
  }
  
  .desktop .overlap-group-7 {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image-7.png);
    background-size: 100% 100%;
  }
  
  .desktop .overlap-group-8 {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image-5.png);
    background-size: 100% 100%;
  }
  
  .desktop .overlap-group-9 {
    position: relative;
    width: 264px;
    height: 244px;
    background-image: url(./img/image-3.png);
    background-size: 100% 100%;
  }
  
  .desktop .frame-16 {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 32px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .frame-17 {
    position: relative;
    width: 1216px;
    height: 400px;
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(180deg, rgb(82.96, 55.64, 158.36) 0%, rgb(104.93, 64.81, 198.19) 100%);
  }
  
  .desktop .frame-18 {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 28px;
    position: absolute;
    top: 92px;
    left: 60px;
  }
  
  .desktop .frame-19 {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .text-wrapper-10 {
    position: relative;
    width: 455px;
    margin-top: -1px;
    font-family: var(--display-md-semibold-font-family);
    font-weight: var(--display-md-semibold-font-weight);
    color: var(--basewhite);
    font-size: var(--display-md-semibold-font-size);
    letter-spacing: var(--display-md-semibold-letter-spacing);
    line-height: var(--display-md-semibold-line-height);
    font-style: var(--display-md-semibold-font-style);
  }
  
  .desktop .text-wrapper-11 {
    position: relative;
    width: 416px;
    font-family: var(--text-lg-normal-font-family);
    font-weight: var(--text-lg-normal-font-weight);
    color: var(--gray-200);
    font-size: var(--text-lg-normal-font-size);
    letter-spacing: var(--text-lg-normal-letter-spacing);
    line-height: var(--text-lg-normal-line-height);
    font-style: var(--text-lg-normal-font-style);
  }
  
  .desktop .button-2 {
    display: inline-flex;
    gap: 8px;
    padding: 10px 18px;
    flex: 0 0 auto;
    border-radius: 8px;
    border: 1px solid;
    box-shadow: var(--shadow-xs);
    align-items: center;
    justify-content: center;
    position: relative;
    background-color: var(--basewhite);
    overflow: hidden;
    border-color: var(--gray-300);
    all: unset;
    box-sizing: border-box;
  }
  
  .desktop .text-3 {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--text-md-medium-font-family);
    font-weight: var(--text-md-medium-font-weight);
    color: var(--gray-700);
    font-size: var(--text-md-medium-font-size);
    letter-spacing: var(--text-md-medium-letter-spacing);
    line-height: var(--text-md-medium-line-height);
    white-space: nowrap;
    font-style: var(--text-md-medium-font-style);
  }
  
  .desktop .pngtree-girl-wearing {
    position: absolute;
    width: 584px;
    height: 400px;
    top: 0;
    left: 563px;
    object-fit: cover;
  }
  
  .desktop .frame-20 {
    display: inline-flex;
    align-items: flex-start;
    gap: 32px;
    position: relative;
    flex: 0 0 auto;
  }
  
  .desktop .frame-21 {
    position: relative;
    width: 592px;
    height: 296px;
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(180deg, rgb(91.64, 103.82, 120.86) 0%, rgb(192.61, 197.37, 206.89) 100%);
  }
  
  .desktop .frame-22 {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 28px;
    position: relative;
    top: 60px;
    left: 60px;
  }
  
  .desktop .text-wrapper-12 {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--display-sm-semibold-font-family);
    font-weight: var(--display-sm-semibold-font-weight);
    color: var(--gray-25);
    font-size: var(--display-sm-semibold-font-size);
    letter-spacing: var(--display-sm-semibold-letter-spacing);
    line-height: var(--display-sm-semibold-line-height);
    white-space: nowrap;
    font-style: var(--display-sm-semibold-font-style);
  }
  
  .desktop .text-wrapper-13 {
    position: relative;
    width: 251px;
    font-family: var(--text-md-normal-font-family);
    font-weight: var(--text-md-normal-font-weight);
    color: var(--gray-100);
    font-size: var(--text-md-normal-font-size);
    letter-spacing: var(--text-md-normal-letter-spacing);
    line-height: var(--text-md-normal-line-height);
    font-style: var(--text-md-normal-font-style);
  }
  
  .desktop .frame-23 {
    position: relative;
    width: 592px;
    height: 296px;
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(180deg, rgb(125.91, 154.99, 211.97) 0%, rgb(181.56, 193.86, 217.94) 100%);
  }
  
  .desktop .frame-24 {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 28px;
    position: absolute;
    top: 60px;
    left: 60px;
  }
  
  .desktop .removebg {
    top: 45px;
    left: 345px;
    position: absolute;
    width: 238px;
    height: 215px;
  }
  
  .desktop .book-removebg {
    top: 482px;
    left: 350px;
    position: absolute;
    width: 238px;
    height: 215px;
  }
  
  .desktop .berita {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    padding: 96px 60px;
    position: relative;
    align-self: stretch;
    width: 100%;
    flex: 0 0 auto;
    background-color: var(--gray-50);
  }
  
  .desktop .group-2 {
    position: relative;
    width: 1280px;
    height: 490.93px;
  }
  
  .desktop .group-3 {
    position: absolute;
    width: 444px;
    height: 67px;
    top: 0;
    left: 445px;
  }
  
  .desktop .text-wrapper-14 {
    position: absolute;
    height: 38px;
    top: 0;
    left: 152px;
    font-family: var(--display-sm-semibold-font-family);
    font-weight: var(--display-sm-semibold-font-weight);
    color: var(--neutral-800-p);
    font-size: var(--display-sm-semibold-font-size);
    text-align: center;
    letter-spacing: var(--display-sm-semibold-letter-spacing);
    line-height: var(--display-sm-semibold-line-height);
    white-space: nowrap;
    font-style: var(--display-sm-semibold-font-style);
  }
  
  .desktop .text-wrapper-15 {
    position: absolute;
    height: 24px;
    top: 43px;
    left: 0;
    font-family: var(--text-md-normal-font-family);
    font-weight: var(--text-md-normal-font-weight);
    color: var(--neutral-800-p);
    font-size: var(--text-md-normal-font-size);
    letter-spacing: var(--text-md-normal-letter-spacing);
    line-height: var(--text-md-normal-line-height);
    white-space: nowrap;
    font-style: var(--text-md-normal-font-style);
  }
  
  .desktop .frame-25 {
    display: flex;
    width: 1280px;
    align-items: center;
    gap: 8px;
    position: absolute;
    top: 107px;
    left: 0;
  }
  
  .desktop .frame-26 {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    position: relative;
    flex: 1;
    flex-grow: 1;
    overflow: hidden;
  }
  
  .desktop .testimonials {
    position: relative;
    width: 272px;
    height: 384px;
    background-color: var(--gray-700);
    border-radius: 12px;
  }
  
  .desktop .overlap-group-10 {
    position: absolute;
    width: 232px;
    height: 163px;
    top: 112px;
    left: 20px;
  }
  
  .desktop .text-wrapper-16 {
    position: absolute;
    width: 232px;
    top: 23px;
    left: 0;
    font-family: var(--text-lg-normal-font-family);
    font-weight: var(--text-lg-normal-font-weight);
    color: var(--neutral-0);
    font-size: var(--text-lg-normal-font-size);
    letter-spacing: var(--text-lg-normal-letter-spacing);
    line-height: var(--text-lg-normal-line-height);
    font-style: var(--text-lg-normal-font-style);
  }
  
  .desktop .double-quotes-l {
    position: absolute;
    width: 24px;
    height: 24px;
    top: 0;
    left: 0;
  }
  
  .desktop .frame-27 {
    display: flex;
    flex-direction: column;
    width: 116px;
    height: 48px;
    align-items: flex-start;
    gap: 4px;
    position: absolute;
    top: 22px;
    left: 20px;
  }
  
  .desktop .text-wrapper-17 {
    position: relative;
    width: 45px;
    margin-top: -1px;
    font-family: var(--base-number-2-bold-font-family);
    font-weight: var(--base-number-2-bold-font-weight);
    color: var(--neutral-0);
    font-size: var(--base-number-2-bold-font-size);
    letter-spacing: var(--base-number-2-bold-letter-spacing);
    line-height: var(--base-number-2-bold-line-height);
    font-style: var(--base-number-2-bold-font-style);
  }
  
  .desktop .frame-28 {
    position: relative;
    width: 116px;
    height: 20px;
  }
  
  .desktop .star-s-fill {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 0;
    left: 0;
    object-fit: cover;
  }
  
  .desktop .star-s-fill-2 {
    top: 0;
    left: 24px;
    position: absolute;
    width: 20px;
    height: 20px;
    object-fit: cover;
  }
  
  .desktop .star-s-fill-3 {
    top: 0;
    left: 48px;
    position: absolute;
    width: 20px;
    height: 20px;
    object-fit: cover;
  }
  
  .desktop .star-s-fill-4 {
    top: 0;
    left: 72px;
    position: absolute;
    width: 20px;
    height: 20px;
    object-fit: cover;
  }
  
  .desktop .star-half-s-fill {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 0;
    left: 96px;
    object-fit: cover;
  }
  
  .desktop .group-4 {
    position: absolute;
    width: 150px;
    height: 40px;
    top: 324px;
    left: 20px;
  }
  
  .desktop .avatar-initials {
    position: absolute;
    width: 40px;
    height: 40px;
    top: 0;
    left: 0;
    background-color: #205387;
    border-radius: 20px;
    border: 2px solid;
    border-color: #eef3f8;
  }
  
  .desktop .AB {
    position: absolute;
    width: 26px;
    top: 9px;
    left: 5px;
    font-family: var(--subheading-font-family);
    font-weight: var(--subheading-font-weight);
    color: var(--neutral-0);
    font-size: var(--subheading-font-size);
    text-align: center;
    letter-spacing: var(--subheading-letter-spacing);
    line-height: var(--subheading-line-height);
    white-space: nowrap;
    font-style: var(--subheading-font-style);
  }
  
  .desktop .frame-29 {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 4px;
    position: absolute;
    top: 0;
    left: 48px;
  }
  
  .desktop .kane-spurs {
    position: relative;
    width: fit-content;
    margin-top: -1px;
    font-family: var(--text-sm-normal-font-family);
    font-weight: var(--text-sm-normal-font-weight);
    color: var(--neutral-0);
    font-size: var(--text-sm-normal-font-size);
    letter-spacing: var(--text-sm-normal-letter-spacing);
    line-height: var(--text-sm-normal-line-height);
    white-space: nowrap;
    font-style: var(--text-sm-normal-font-style);
  }
  
  .desktop .text-wrapper-18 {
    position: relative;
    width: 102px;
    font-family: var(--base-body-3-regular-font-family);
    font-weight: var(--base-body-3-regular-font-weight);
    color: var(--gray-300);
    font-size: var(--base-body-3-regular-font-size);
    letter-spacing: var(--base-body-3-regular-letter-spacing);
    line-height: var(--base-body-3-regular-line-height);
    font-style: var(--base-body-3-regular-font-style);
  }
  
  .desktop .frame-30 {
    display: flex;
    flex-direction: column;
    width: 116px;
    align-items: flex-start;
    gap: 4px;
    position: absolute;
    top: 22px;
    left: 20px;
  }
  
  .desktop .star-s-fill-5 {
    top: 1143px;
    left: 3452px;
    position: absolute;
    width: 20px;
    height: 20px;
    object-fit: cover;
  }
  
  .desktop .star-s-fill-6 {
    top: 1143px;
    left: 3476px;
    position: absolute;
    width: 20px;
    height: 20px;
    object-fit: cover;
  }
  
  .desktop .star-half-s-fill-2 {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 1143px;
    left: 3500px;
    object-fit: cover;
  }
  
  .desktop .text-wrapper-19 {
    position: relative;
    width: 75px;
    margin-top: -1px;
    font-family: var(--base-body-2-medium-font-family);
    font-weight: var(--base-body-2-medium-font-weight);
    color: var(--neutral-0);
    font-size: var(--base-body-2-medium-font-size);
    letter-spacing: var(--base-body-2-medium-letter-spacing);
    line-height: var(--base-body-2-medium-line-height);
    font-style: var(--base-body-2-medium-font-style);
  }
  
  .desktop .text-wrapper-20 {
    position: relative;
    width: 102px;
    font-family: var(--base-body-3-regular-font-family);
    font-weight: var(--base-body-3-regular-font-weight);
    color: var(--neutral-0);
    font-size: var(--base-body-3-regular-font-size);
    letter-spacing: var(--base-body-3-regular-letter-spacing);
    line-height: var(--base-body-3-regular-line-height);
    font-style: var(--base-body-3-regular-font-style);
  }
  
  .desktop .footer-center {
    position: relative;
    width: 1440px;
    height: 410px;
    background-color: #f2f2f2;
  }
  
  .desktop .logo {
    position: absolute;
    top: 111px;
    left: 651px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 24px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .desktop .copyright {
    position: absolute;
    top: 355px;
    left: 614px;
    font-family: "Roboto-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 14px;
    text-align: center;
    letter-spacing: 0;
    line-height: 19.7px;
    white-space: nowrap;
  }
  
  .desktop .link {
    top: 355px;
    left: 722px;
    font-family: "Roboto-Regular", Helvetica;
    font-weight: 400;
    text-align: center;
    position: absolute;
    color: #000000;
    font-size: 14px;
    letter-spacing: 0;
    line-height: 19.7px;
    white-space: nowrap;
  }
  
  .desktop .divider {
    position: absolute;
    width: 1000px;
    height: 1px;
    top: 188px;
    left: 220px;
    object-fit: cover;
  }
  
  .desktop .links-left {
    width: 306px;
    left: 262px;
    position: absolute;
    height: 20px;
    top: 115px;
  }
  
  .desktop .link-2 {
    top: 0;
    left: 0;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    position: absolute;
    color: #000000;
    font-size: 14px;
    letter-spacing: 0;
    line-height: 19.7px;
    white-space: nowrap;
  }
  
  .desktop .link-3 {
    top: 0;
    left: 114px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    position: absolute;
    color: #000000;
    font-size: 14px;
    letter-spacing: 0;
    line-height: 19.7px;
    white-space: nowrap;
  }
  
  .desktop .link-4 {
    top: 0;
    left: 233px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    position: absolute;
    color: #000000;
    font-size: 14px;
    letter-spacing: 0;
    line-height: 19.7px;
    white-space: nowrap;
  }
  
  .desktop .links-right {
    width: 252px;
    left: 878px;
    position: absolute;
    height: 20px;
    top: 115px;
  }
  
  .desktop .link-5 {
    top: 0;
    left: 102px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    position: absolute;
    color: #000000;
    font-size: 14px;
    letter-spacing: 0;
    line-height: 19.7px;
    white-space: nowrap;
  }
  
  .desktop .link-6 {
    top: 0;
    left: 195px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    position: absolute;
    color: #000000;
    font-size: 14px;
    letter-spacing: 0;
    line-height: 19.7px;
    white-space: nowrap;
  }
  
  .desktop .social-media {
    position: absolute;
    width: 296px;
    height: 40px;
    top: 243px;
    left: 572px;
  }
  
  .desktop .overlap-group-11 {
    position: absolute;
    width: 40px;
    height: 40px;
    top: -1px;
    left: 127px;
    border-radius: 20px;
    border: 1px solid;
    border-color: #000000;
  }
  
  .desktop .ellipse {
    left: 64px;
    position: absolute;
    width: 40px;
    height: 40px;
    top: 0;
    border-radius: 20px;
    border: 1px solid;
    border-color: #000000;
  }
  
  .desktop .ellipse-2 {
    left: 192px;
    position: absolute;
    width: 40px;
    height: 40px;
    top: 0;
    border-radius: 20px;
    border: 1px solid;
    border-color: #000000;
  }
  
  .desktop .ellipse-3 {
    left: 256px;
    position: absolute;
    width: 40px;
    height: 40px;
    top: 0;
    border-radius: 20px;
    border: 1px solid;
    border-color: #000000;
  }
  
  .desktop .ellipse-4 {
    left: 0;
    position: absolute;
    width: 40px;
    height: 40px;
    top: 0;
    border-radius: 20px;
    border: 1px solid;
    border-color: #000000;
  }
  
  </style>
  <body>
    <div class="desktop">
      <div class="conten">
        <div class="frame">
          <div class="frame-wrapper">
            <div class="div-wrapper">
              <div class="div">
                <div class="badge-group">
                  <div class="badge">
                    <div class="badge-base"><div class="text">APPS</div></div>
                  </div>
                  <div class="div-2"><div class="message">SMK8 Production</div></div>
                </div>
                <div class="frame-2">
                  <img class="united-states-daniel" src="img/united-states-daniel-mcr-01-1.svg" />
                  <div class="text-wrapper">English</div>
                  <img class="chevron-down" src="img/chevron-down.svg" />
                </div>
              </div>
            </div>
          </div>
          <div class="header-section">
            <div class="container">
              <div class="header-wrapper">
                <header class="header">
                  <div class="frame-3">
                    <div class="logomark">
                      <div class="overlap-group">
                        <div class="isometric-square"></div>
                        <div class="isometric-square-2"></div>
                      </div>
                    </div>
                    <div class="text-wrapper-2">Pukalapan</div>
                  </div>
                  <div class="frame-4">
                    <div class="frame-5">
                      <div class="text-wrapper-3">All Kategori</div>
                      <img class="img" src="img/chevron-down-2.svg" />
                    </div>
                    <div class="rectangle"></div>
                    <div class="div">
                      <div class="i-m-looking-for">I&#39;m looking for...</div>
                      <img class="search-lg" src="img/search-lg.svg" />
                    </div>
                  </div>
                  <div class="div-2">
                    <div class="featured-icon"><img class="img-2" src="img/heart.svg" /></div>
                    <div class="featured-icon"><img class="img-2" src="img/user-02.svg" /></div>
                    <div class="featured-icon"><img class="img-2" src="img/shopping-bag-02.svg" /></div>
                  </div>
                </header>
              </div>
            </div>
          </div>
          <div class="frame-6">
            <div class="component"><img class="icon-menu" src="img/icon-menu.png" /></div>
            <div class="img-wrapper"><img class="img-3" src="img/chevron-left.svg" /></div>
            <div class="frame-7">
              <div class="frame-8">
                <div class="group"><img class="icon-book" src="img/icon-book-2.png" /></div>
                <div class="text-wrapper-4">All Kategori</div>
              </div>
              <div class="frame-9">
                <div class="group"><img class="icon-book" src="img/icon-book-3.png" /></div>
                <div class="text-wrapper-4">Buku Paket</div>
              </div>
              <div class="frame-9">
                <div class="group"><img class="icon-book" src="img/icon-book-4.png" /></div>
                <div class="text-wrapper-4">Buku cerita</div>
              </div>
              <div class="frame-9">
                <div class="group"><img class="icon-book" src="img/icon-book.png" /></div>
                <div class="text-wrapper-4">Buku Motivasi</div>
              </div>
              <div class="frame-9">
                <div class="history-icon-wrapper"><img class="history-icon" src="img/history-icon-1.png" /></div>
                <div class="text-wrapper-4">Histori</div>
              </div>
              <div class="frame-9">
                <div class="icon-comment-square-wrapper">
                  <img class="icon-comment-square" src="img/icon-comment-square.png" />
                </div>
                <div class="text-wrapper-4">Chat</div>
              </div>
            </div>
            <div class="img-wrapper"><img class="img-3" src="img/chevron-right-2.svg" /></div>
          </div>
          <div class="banner">
            <div class="overlap">
              <div class="rectangle-2"></div>
              <div class="text-wrapper-5">Temukan Impian Mu disini</div>
              <img class="icon-reading" src="img/icon-reading.png" />
              <div class="mulai-baca">
                <div class="overlap-group-2">
                  <div class="text-wrapper-6">MULAI BACA</div>
                  <div class="rectangle-3"></div>
                </div>
              </div>
              <p class="tidak-ada-teman-yang">&#34;Tidak ada teman yang setia seperti halnya buku.&#34;</p>
            </div>
          </div>
        </div>
      </div>
      <div class="isi-conten">
        <div class="section">
          <div class="contact-page-header">
            <div class="section-2">
              <div class="container-2">
                <div class="frame-10">
                  <div class="text-wrapper-7">Rekomendasi Hari ini</div>
                  <div class="frame-11">
                    <div class="frame-12">
                      <div class="card-horizontal">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="buku-wrapper"><img class="buku" src="img/buku-2-1-2.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist-2.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart-4.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-horizontal">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="overlap-group-3"><img class="buku" src="img/buku-2-1.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star-5.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart-6.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-horizontal">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="overlap-group-4"><img class="buku" src="img/buku-2-1-4.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star-7.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart-3.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-wrapper">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="overlap-group-5"><img class="buku" src="img/buku-2-1-6.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star-3.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart-2.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-11">
                    <div class="frame-12">
                      <div class="card-horizontal">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="overlap-group-6"><img class="buku" src="img/buku-2-1-5.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star-4.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist-3.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart-8.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-horizontal">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="overlap-group-7"><img class="buku" src="img/buku-2-1-8.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star-8.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist-4.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart-7.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-horizontal">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="overlap-group-8"><img class="buku" src="img/buku-2-1-7.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star-2.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist-4.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-wrapper">
                        <div class="product">
                          <div class="product-card">
                            <div class="overlap-group-wrapper">
                              <div class="overlap-group-9"><img class="buku" src="img/buku-2-1-3.png" /></div>
                            </div>
                            <div class="frame-13">
                              <div class="frame-14">
                                <div class="frame-15">
                                  <p class="p">THE MIND OF A LEADER</p>
                                  <div class="text-wrapper-8">BUKU MOTIVASI</div>
                                  <div class="ratings">
                                    <img class="icon-star" src="img/star-6.svg" />
                                    <div class="text-wrapper-9">43 Ratings</div>
                                  </div>
                                </div>
                                <img class="icon-wishlist" src="img/wishlist-4.svg" />
                              </div>
                              <div class="button"><div class="text-2">PINJAM SEKARANG</div></div>
                              <img class="icon-cart" src="img/icon-cart-5.png" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contact-page-header">
                <div class="section-2">
                  <div class="container-2">
                    <div class="frame-16">
                      <div class="frame-17">
                        <div class="frame-18">
                          <div class="frame-19">
                            <div class="text-wrapper-10">Ruang Baca</div>
                            <p class="text-wrapper-11">Smooth, responsive Super Retina XDR display with ProMotion.</p>
                          </div>
                          <button class="button-2"><div class="text-3">Baca Sekarang</div></button>
                        </div>
                        <img
                          class="pngtree-girl-wearing"
                          src="img/pngtree-girl-wearing-hijab-reading-book-illustration-free-download-png-image-3952881-removebg-preview-1.png"
                        />
                      </div>
                      <div class="frame-20">
                        <div class="frame-21">
                          <div class="frame-22">
                            <div class="frame-19">
                              <div class="text-wrapper-12">Next Update</div>
                              <p class="text-wrapper-13">Smooth, responsive Super Retina XDR display with ProMotion.</p>
                            </div>
                            <button class="button-2"><div class="text-3">Learn more</div></button>
                          </div>
                        </div>
                        <div class="frame-23">
                          <div class="frame-24">
                            <div class="frame-19">
                              <div class="text-wrapper-12">Coming soon</div>
                              <p class="text-wrapper-13">Smooth, responsive Super Retina XDR display with ProMotion.</p>
                            </div>
                            <button class="button-2"><div class="text-3">Learn more</div></button>
                          </div>
                          <img class="removebg" src="img/book2-removebg-preview-2.png" />
                        </div>
                      </div>
                      <img class="book-removebg" src="img/book2-removebg-preview-1.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="berita">
        <div class="group-2">
          <div class="group-3">
            <div class="text-wrapper-14">Berita</div>
            <p class="text-wrapper-15">See what customers and suppliers say about our products</p>
          </div>
          <div class="frame-25">
            <div class="img-wrapper"><img class="img-3" src="img/chevron-left-2.svg" /></div>
            <div class="frame-26">
              <div class="testimonials">
                <div class="overlap-group-10">
                  <p class="text-wrapper-16">
                    Love the simplicity of the service and the prompt customer support. We can’t imagine working without
                    it.
                  </p>
                  <img class="double-quotes-l" src="img/double-quotes-l-2.svg" />
                </div>
                <div class="frame-27">
                  <div class="text-wrapper-17">4.5</div>
                  <div class="frame-28">
                    <img class="star-s-fill" src="img/star-s-fill-15.svg" />
                    <img class="star-s-fill-2" src="img/star-s-fill-12.svg" />
                    <img class="star-s-fill-3" src="img/star-s-fill-17.svg" />
                    <img class="star-s-fill-4" src="img/star-s-fill-13.svg" />
                    <img class="star-half-s-fill" src="img/star-half-s-fill-2.svg" />
                  </div>
                </div>
                <div class="group-4">
                  <div class="avatar-initials"><div class="AB">KS</div></div>
                  <div class="frame-29">
                    <div class="kane-spurs">Theresa Webb</div>
                    <div class="text-wrapper-18">CEO at Honeywell</div>
                  </div>
                </div>
              </div>
              <div class="testimonials">
                <div class="overlap-group-10">
                  <p class="text-wrapper-16">
                    Love the simplicity of the service and the prompt customer support. We can’t imagine working without
                    it.
                  </p>
                  <img class="double-quotes-l" src="img/double-quotes-l-5.svg" />
                </div>
                <div class="frame-30">
                  <div class="text-wrapper-17">4.5</div>
                  <div class="frame-28">
                    <img class="star-s-fill" src="img/star-s-fill-14.svg" />
                    <img class="star-s-fill-2" src="img/star-s-fill-3.svg" />
                    <img class="star-s-fill-3" src="img/star-s-fill-18.svg" />
                    <img class="star-s-fill-4" src="img/star-s-fill-2.svg" />
                    <img class="star-half-s-fill" src="img/star-half-s-fill.svg" />
                  </div>
                </div>
                <div class="group-4">
                  <div class="avatar-initials"><div class="AB">KS</div></div>
                  <div class="frame-29">
                    <div class="kane-spurs">Cameron Williamson</div>
                    <div class="text-wrapper-18">CEO at Honeywell</div>
                  </div>
                </div>
              </div>
              <div class="testimonials">
                <div class="overlap-group-10">
                  <p class="text-wrapper-16">
                    Love the simplicity of the service and the prompt customer support. We can’t imagine working without
                    it.
                  </p>
                  <img class="double-quotes-l" src="img/double-quotes-l.svg" />
                </div>
                <div class="frame-30">
                  <div class="text-wrapper-17">4.5</div>
                  <div class="frame-28">
                    <img class="star-s-fill" src="img/star-s-fill.svg" />
                    <img class="star-s-fill-2" src="img/star-s-fill-10.svg" />
                    <img class="star-s-fill-3" src="img/star-s-fill-8.svg" />
                    <img class="star-s-fill-4" src="img/star-s-fill-5.svg" />
                    <img class="star-half-s-fill" src="img/image.svg" />
                  </div>
                </div>
                <div class="group-4">
                  <div class="avatar-initials"><div class="AB">KS</div></div>
                  <div class="frame-29">
                    <div class="kane-spurs">Dianne Russell</div>
                    <div class="text-wrapper-18">CEO at Honeywell</div>
                  </div>
                </div>
              </div>
              <div class="testimonials">
                <div class="overlap-group-10">
                  <p class="text-wrapper-16">
                    Love the simplicity of the service and the prompt customer support. We can’t imagine working without
                    it.
                  </p>
                  <img class="double-quotes-l" src="img/double-quotes-l-4.svg" />
                </div>
                <div class="frame-30">
                  <div class="text-wrapper-17">4.5</div>
                  <div class="frame-28">
                    <img class="star-s-fill" src="img/star-s-fill-16.svg" />
                    <img class="star-s-fill-2" src="img/star-s-fill-4.svg" />
                    <img class="star-s-fill-3" src="img/star-s-fill-9.svg" />
                    <img class="star-s-fill-4" src="img/star-s-fill-11.svg" />
                    <img class="star-half-s-fill" src="img/star-half-s-fill-3.svg" />
                  </div>
                </div>
                <div class="group-4">
                  <div class="avatar-initials"><div class="AB">KS</div></div>
                  <div class="frame-29">
                    <div class="kane-spurs">Guy Hawkins</div>
                    <div class="text-wrapper-18">CEO at Honeywell</div>
                  </div>
                </div>
              </div>
              <div class="testimonials">
                <div class="overlap-group-10">
                  <p class="text-wrapper-16">
                    Love the simplicity of the service and the prompt customer support. We can’t imagine working without
                    it.
                  </p>
                  <img class="double-quotes-l" src="img/double-quotes-l-3.svg" />
                </div>
                <div class="frame-30">
                  <div class="text-wrapper-17">4.5</div>
                  <div class="frame-28">
                    <img class="star-s-fill" src="img/star-s-fill-6.svg" />
                    <img class="star-s-fill-2" src="img/star-s-fill-7.svg" />
                    <img class="star-s-fill-5" src="img/star-s-fill-2.png" />
                    <img class="star-s-fill-6" src="img/star-s-fill.png" />
                    <img class="star-half-s-fill-2" src="img/star-half-s-fill.png" />
                  </div>
                </div>
                <div class="group-4">
                  <div class="avatar-initials"><div class="AB">KS</div></div>
                  <div class="frame-29">
                    <div class="text-wrapper-19">kane Spurs</div>
                    <div class="text-wrapper-20">CEO at Honeywell</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="img-wrapper"><img class="img-3" src="img/chevron-right.svg" /></div>
          </div>
        </div>
      </div>
      <div class="footer-center">
        <div class="logo">PUKALAPAN</div>
        <div class="copyright">© 2010 — 2020</div>
        <div class="link">Privacy — Terms</div>
        <img class="divider" src="img/divider.svg" />
        <div class="links-left">
          <div class="link-2">BUKU</div>
          <div class="link-3">FITUR</div>
          <div class="link-4">Resources</div>
        </div>
        <div class="links-right">
          <div class="link-2">About</div>
          <div class="link-5">Blog</div>
          <div class="link-6">Support</div>
        </div>
        <div class="social-media">
          <div class="overlap-group-11"></div>
          <div class="ellipse"></div>
          <div class="ellipse-2"></div>
          <div class="ellipse-3"></div>
          <div class="ellipse-4"></div>
        </div>
      </div>
    </div>
  </body>
</html>
