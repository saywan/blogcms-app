<x-app-layout>
    <x-slot name="title">
        - ثبت نام
    </x-slot>

    <main class="bg--white">
        <div class="container">
            <div class="sign-page">
                <h1 class="sign-page__title">ثبت نام در وب‌سایت</h1>

                <ul style="list-style: disc !important;">
                    @foreach($errors->all() as $error )
                        <li style="color: red">{{$error}}</li>
                    @endforeach
                </ul>

                <form class="sign-page__form" action="{{route('register.store')}}" method="post">
                       @csrf
                        <input type="text" class="text text--right" placeholder="نام  و نام خانوادگی" name="fullname">

                        <input type="text" class="text text--left" placeholder="شماره موبایل" name="mobile">
                        <input type="text" class="text text--left" placeholder="ایمیل" name="email">
                        <input type="password" class="text text--left" placeholder="رمز عبور" name="password">
                        <input type="password" class="text text--left" placeholder="تکرار رمز عبور" name="password_confirmation">


                        <button type="submit"  class="btn btn--blue btn--shadow-blue width-100 mb-10">ثبت نام</button>
                        <button type="reset" class="btn btn--red btn--shadow-red width-100 ">
                            انصراف
                        </button>
                        <div class="sign-page__footer">
                            <span>در سایت عضوید ؟ </span>
                            <a href="{{route('login')}}" class="color--46b2f0">صفحه ورود</a>
                        </div>

                </form>
            </div>
        </div>
    </main>

</x-app-layout>
