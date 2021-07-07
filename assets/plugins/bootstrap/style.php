.text-center{
    text-align: center;
}

.text-left {
    text-align: left !important;
  }
  
  .text-right {
    text-align: right !important;
  }
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  
  @media (min-width: 576px) {
    .container {
      max-width: 540px;
    }
  }
  
  @media (min-width: 768px) {
    .container {
      max-width: 720px;
    }
  }
  
  @media (min-width: 992px) {
    .container {
      max-width: 960px;
    }
  }
  
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px;
    }
  }
  .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .no-gutters {
    margin-right: 0;
    margin-left: 0;
  }
  
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
  }
  .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}


.w-25 {
    width: 25% !important;
  }
  
  .w-50 {
    width: 50% !important;
  }
  
  .w-75 {
    width: 75% !important;
  }
  
  .w-100 {
    width: 100% !important;
  }
  
  .h-25 {
    height: 25% !important;
  }
  
  .h-50 {
    height: 50% !important;
  }
  
  .h-75 {
    height: 75% !important;
  }
  
  .h-100 {
    height: 100% !important;
  }
  
  .mw-100 {
    max-width: 100% !important;
  }
  
  .mh-100 {
    max-height: 100% !important;
  }
  
  .m-0 {
    margin: 0 !important;
  }
  
  .mt-0,
  .my-0 {
    margin-top: 0 !important;
  }
  
  .mr-0,
  .mx-0 {
    margin-right: 0 !important;
  }
  
  .mb-0,
  .my-0 {
    margin-bottom: 0 !important;
  }
  
  .ml-0,
  .mx-0 {
    margin-left: 0 !important;
  }
  
  .m-1 {
    margin: 0.25rem !important;
  }
  
  .mt-1,
  .my-1 {
    margin-top: 0.25rem !important;
  }
  
  .mr-1,
  .mx-1 {
    margin-right: 0.25rem !important;
  }
  
  .mb-1,
  .my-1 {
    margin-bottom: 0.25rem !important;
  }
  
  .ml-1,
  .mx-1 {
    margin-left: 0.25rem !important;
  }
  
  .m-2 {
    margin: 0.5rem !important;
  }
  
  .mt-2,
  .my-2 {
    margin-top: 0.5rem !important;
  }
  
  .mr-2,
  .mx-2 {
    margin-right: 0.5rem !important;
  }
  
  .mb-2,
  .my-2 {
    margin-bottom: 0.5rem !important;
  }
  
  .ml-2,
  .mx-2 {
    margin-left: 0.5rem !important;
  }
  
  .m-3 {
    margin: 1rem !important;
  }
  
  .mt-3,
  .my-3 {
    margin-top: 1rem !important;
  }
  
  .mr-3,
  .mx-3 {
    margin-right: 1rem !important;
  }
  
  .mb-3,
  .my-3 {
    margin-bottom: 1rem !important;
  }
  
  .ml-3,
  .mx-3 {
    margin-left: 1rem !important;
  }
  
  .m-4 {
    margin: 1.5rem !important;
  }
  
  .mt-4,
  .my-4 {
    margin-top: 1.5rem !important;
  }
  
  .mr-4,
  .mx-4 {
    margin-right: 1.5rem !important;
  }
  
  .mb-4,
  .my-4 {
    margin-bottom: 1.5rem !important;
  }
  
  .ml-4,
  .mx-4 {
    margin-left: 1.5rem !important;
  }
  
  .m-5 {
    margin: 3rem !important;
  }
  
  .mt-5,
  .my-5 {
    margin-top: 3rem !important;
  }
  
  .mr-5,
  .mx-5 {
    margin-right: 3rem !important;
  }
  
  .mb-5,
  .my-5 {
    margin-bottom: 3rem !important;
  }
  
  .ml-5,
  .mx-5 {
    margin-left: 3rem !important;
  }

  h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
  }
