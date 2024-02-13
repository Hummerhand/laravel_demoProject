<section class="contact_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6 ">
                <div class="form_container">
                    <div class="heading_container ">
                        <h2>
                            {{ __('СВЯЗАТЬСЯ С НАМИ') }}
                        </h2>
                    </div>
                    <form action="{{ route('contact_process') }}" method="post">

                        @csrf

                        <div>
                            <input name="name" type="text" placeholder="Your Name" />
                        </div>

                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <div>
                            <input name="phone" type="text" placeholder="Phone Number" />
                        </div>

                        @error('phone')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <div>
                            <input name="email" type="email" placeholder="Email" />
                        </div>

                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <div>
                            <input name="text" type="text" class="message-box" placeholder="Message" />
                        </div>

                        @error('text')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <div class="btn_box">
                            <button>
                                {{ __('Отправить') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-lg-6">
                <div class="subscribe-box">
                    <h3>
                        {{ __('ПОДПИСЫВАЙТЕСЬ НА НАШУ НОВОСТНУЮ РАССЫЛКУ') }}
                    </h3>
                    <p>
                        {{ __('Подписывайтесь на нашу рассылку и всегда получайте только свежие новости и предложения от нашей компании!') }}
                    </p>
                    <form action="{{ route('subscribe_process') }}" method="post">

                        @csrf

                        <input name="email" type="email" placeholder="Enter your email">

                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <button>
                            {{ __('Подписаться') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
