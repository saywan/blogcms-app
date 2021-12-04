<x-app-layout>
    <x-slot name="title">
        - ورود به سیستم
    </x-slot>
    <main class="bg--white">
        <div class="container">
            <div class="sign-page">
                <h1 class="sign-page__title">ورود به وب‌سایت</h1>

                <form class="sign-page__form">
                    <form action="{{route('login.store')}}" method="post">
                        @csrf
                        <input type="text" name="email" class="text text--left" placeholder="شماره یا ایمیل">
                        <input type="password" name="password"   class="text text--left" placeholder="رمز عبور">
                        <label class="checkbox text--right">
                            <input type="checkbox" class="checkbox__filter" name="remember">
                            <span class="checkbox__mark position-relative"></span>
                            مرا بخاطر بسپار
                        </label>
                        <a class="recover-password" href="{{route('reset-pass')}}">بازیابی رمز عبور</a>
                        <button type="submit" class="btn btn--blue btn--shadow-blue width-100 ">ورود به سایت</button>
                        <div class="sign-page__footer">
                            <span>کاربر جدید هستید؟</span>
                            <a href="{{route('register')}}" class="color--46b2f0">صفحه ثبت نام</a>

                        </div>
                    </form>
                </form>
            </div>
        </div>
    </main>


</x-app-layout>
