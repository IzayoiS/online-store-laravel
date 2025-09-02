@extends('layouts.auth')

@section('content')
    <div class="page-content page-auth" id="register">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center justify-content-center row-login">
                    <div class="col-lg-4">
                        <h2>
                            Getting started with buying and selling <br />
                            in the latest way
                        </h2>
                        <form method="POST" action="{{ route('register') }}" class="mt-3">
                            @csrf <div class="form-group">
                                <label>Full Name</label>
                                <input v-model="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                    value="{{ old('name') }}" required autofocus autocomplete="name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input v-model="email" id="email" @change="checkForEmailAvailability()"
                                    :class="{ 'is_invalid': this.email_unavailable }"
                                    class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                                    value="{{ old('email') }}" required autofocus autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" class="form-control @error('password') is-invalid @enderror"
                                    type="password" name="password" value="{{ old('password') }}" required autofocus
                                    autocomplete="username" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password-confirm"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    type="password" name="password_confirmation" required autofocus
                                    autocomplete="new-password" />
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Store</label>
                                <p class="text-muted">Would you also like to open a store?</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                        id="openStoreTrue" v-model="is_store_open" :value="true" />
                                    <label for="openStoreTrue" class="custom-control-label">
                                        Yes
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                        id="openStoreFalse" v-model="is_store_open" :value="false" />
                                    <label for="openStoreFalse" class="custom-control-label">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" v-if="is_store_open">
                                <label>Store Name</label>
                                <input type="text" class="form-control" v-model="store_name"
                                    class="form-control @error('store_name') is-invalid @enderror" name="store_name "
                                    autocomplete required autofocus id="store_name" />
                                @error('store_name')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group" v-if="is_store_open">
                                <label>Category</label>
                                <select name="categories_id" class="form-control">
                                    <option value="" disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block mt-4"
                                :disabled="this.email_unavailable">
                                Sign Up Now
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-4">
                                Back to Sign In
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        Vue.use(Toasted);
        var register = new Vue({
            el: "#register",
            mounted() {
                AOS.init();
                // this.$toasted.error(
                //     "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
                //         position: "top-center",
                //         className: "rounded",
                //         duration: 1000,
                //     }
                // );
            },
            methods: {
                checkForEmailAvailability: function() {
                    var self = this;
                    axios
                        .get('{{ route('api-register-check') }}', {
                            params: {
                                email: this.email
                            }
                        })
                        .then(function(response) {
                            if (response.data == false) {
                                self.email_unavailable = false;
                                self.$toasted.show(
                                    "Your email is available! You may proceed to the next step.", {
                                        position: "top-center",
                                        className: "rounded",
                                        duration: 1000,
                                    }
                                );
                            } else {
                                self.email_unavailable = true;
                                self.$toasted.error(
                                    "Sorry, this email is already registered in our system.", {
                                        position: "top-center",
                                        className: "rounded",
                                        duration: 1000,
                                    }
                                );
                            }
                            console.log(response);
                        });
                }
            },
            data() {
                return {
                    name: "Angga Hazza Sett",
                    email: "kamujagoan@bwa.id",
                    is_store_open: true,
                    store_name: "",
                    email_unavailable: false,
                }
            }
        });
    </script>
@endpush
