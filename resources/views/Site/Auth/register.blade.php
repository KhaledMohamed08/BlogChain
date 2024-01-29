<x-Site.template>
    @section('styles')
        <style>
            label{
                text-align: left;
                margin-top: 3rem;
            }
            input{
                margin-bottom: 0;
            }
            .error{
                color: red;
                text-align: left;
            }
        </style>
    @endsection
    <div id="content-wrap" class="styles">

        <div class="row narrow add-bottom text-center">

            <div class="col-twelve tab-full">

                <h1>Register</h1>

                @if (session('sucss'))
                    <div class="alert-box ss-success hideit">
                        <p>{{ session('sucss') }}</p>
                        <i class="fa fa-times close"></i>
                    </div><!-- /error -->
                @endif
                @if (session('fail'))
                    <div class="alert-box ss-error hideit">
                        <p>{{ session('fail') }}</p>
                        <i class="fa fa-times close"></i>
                    </div><!-- /error -->
                @endif

                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Your Name</label>
                        <input class="full-width" type="text" placeholder="Obelisk" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="error">{{ $message }}</p>
                       @enderror
                    </div>
                    <div>
                        <label for="email">Your Email</label>
                        <input class="full-width" type="email" placeholder="test@mailbox.com" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="error">{{ $message }}</p>
                       @enderror
                    </div>
                    <div>
                        <label for="phone">Your Phone</label>
                        <input class="full-width" type="tel" placeholder="+201093833112" id="phone" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="error">{{ $message }}</p>
                       @enderror
                    </div>
                    <div>
                        <label for="password">Your Password</label>
                        <input class="full-width" type="password" placeholder="***********" id="password" name="password">
                        @error('password')
                            <p class="error">{{ $message }}</p>
                       @enderror
                    </div>
                    <div>
                        <label for="re-password">Re-Password</label>
                        <input class="full-width" type="password" placeholder="***********" id="re-password" name="password_confirmation">
                    </div>
                    <div>
                        <label for="image">image</label>
                        <input class="full-width" type="file" id="image" id="image" name="image">
                    </div>
                    
                    <input class="button-primary full-width-on-mobile" type="submit" value="Register" style="width: 100%; margin-top: 3rem">

                </form>
            </div>
        </div>
    </div>
</x-Site.template>
