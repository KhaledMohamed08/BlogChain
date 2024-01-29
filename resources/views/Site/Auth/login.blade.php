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
                
                <h1>Login</h1>

                @if (session('sucss'))
                    <div class="alert-box ss-success hideit">
                        <p>{{ session('sucss') }}</p>
                        <i class="fa fa-times close"></i>
                    </div><!-- /success -->
                @endif
                @if (session('fail'))
                    <div class="alert-box ss-error hideit">
                        <p>{{ session('fail') }}</p>
                        <i class="fa fa-times close"></i>
                    </div><!-- /error -->
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                       <label for="sampleInput">Your Email or Phone</label>
                       <input class="full-width" type="text" placeholder="test@mailbox.com" id="sampleInput" name="phone">
                       @error('phone')
                            <p class="error">{{ $message }}</p>
                       @enderror
                 </div>
                 <div>
                    <label for="sampleInput">Your Password</label>
                    <input class="full-width" type="password" placeholder="***********" id="sampleInput" name="password">
                    @error('password')
                            <p class="error">{{ $message }}</p>
                       @enderror
              </div>
                  
                    <label class="add-bottom">
                       <input type="checkbox" name="remember_me">
                       <span class="label-text">remember me</span>
                    </label>
                  
                    <input class="button-primary full-width-on-mobile" type="submit" value="Login" style="width: 100%">

              </form>	          
            </div>
        </div>
    </div>
</x-Site.template>