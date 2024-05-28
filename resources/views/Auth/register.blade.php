<x-auth-layout>
    <div class="page-header align-items-start min-vh-100" style="background-image: url('{{ asset('https://images.unsplash.com/photo-1527769929977-c341ee9f2033?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90oy1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}')">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn4 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center  mb-0">Daftar</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" method="post" action="{{ route('register') }}" class="text-start">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <x-label>{{__('Nama')}}</x-label>
                                    <x-form-input type="text" name="name" label="Nama"  />
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <x-label>{{__('Email')}}</x-label>
                                    <x-form-input type="email" name="email" label="Email"  />
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <x-label>{{__('Kata Sandi')}}</x-label>
                                    <x-form-input type="password" name="password" label="Kata Sandi" />
                                </div>
                                <div class="text-center">
                                    <x-button type="submit">{{__('Masuk')}}</x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
