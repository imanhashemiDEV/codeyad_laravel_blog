@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap p-3 bg-white my-4 rounded">
                    <nav>
                        <ol class="d-flex">
                            <li><a href="#">خانه</a></li>
                            <li>جستجو</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-box mb-2">
                        <p class="m-0 p-0">جستجو برای : <span class="text-primary">قالب رایگان</span></p>
                        <span class="d-block"><a href="#">همه مطالب وبلاگ</a> <i class="bi bi-arrow-left position-relative"></i></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/CSS-Contact-Us-Form.png" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span></figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-info py-1 px-2">مطالب روز</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">قالب های رایگان Html</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-instagram d-inline-block text-info text-center"></i>
                            <span>مقاله اینستاگرام</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/buisiness.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span></figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-dark py-1 px-2">پرسش و پاسخ</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">بازاریابی محتوا و هدف</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-card-text d-inline-block text-info text-center"></i>
                            <span>پیشنهادی</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="blg-wrap bg-white pb-3">
                        <figure class="position-relative">
                            <img src="img/blog/Piks.jpg" alt="" class="w-100">
                            <figcaption class="position-absolute w-100 h-100"><span class="blg-dt">4 مرداد</span></figcaption>
                        </figure class="position-relative">
                        <div class="px-3 py-1 text-start">
                            <span class="blg-cat-name d-inline-block bg-primary py-1 px-2">هنر</span>
                        </div>
                        <a href="#">
                            <h4 class="blg-title p-3 mx-5 text-dark border-bottom overflow-hidden">عجیب ترین تابلو ها</h4>
                        </a>
                        <div class="post-type d-flex p-3 pb-0">
                            <i class="bi bi-columns-gap d-inline-block text-info text-center"></i>
                            <span>مقاله تصویری</span>
                        </div>
                        <p class="p-4 overflow-hidden">زمانی که چندین سال قبل تصمیم گرفتیم تا قدم در میدان طراحی و برنامه نویسی وب سایت بگذاریم هیچ مسیری برای ما واضح و روشن نبود و باید در جستجوی راه های درست ، روز ها و هفته ها وقت سپری می کردیم </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="pagination-wrap">
                    <ul class="d-flex justify-content-center">
                        <li><a href="#">..</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">..</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="category-excerpt bg-white rounded p-3 mb-4">
                    <p class="m-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
