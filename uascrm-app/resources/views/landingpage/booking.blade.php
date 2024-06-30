@extends ('landing.layout')
@section ('content')

<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-5">

                    <form action="{{url('landingpage/booking/pesan')}}" method="POST" class="p-5 bg-white">
                    @csrf
                        <h2 class="mb-4 site-section-heading">Book Now</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="name">Waktu Booking</label>
                                <input type="date" id="waktu_pemesanan" name="waktu_pemesanan" class="form-control" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="treatment">Service You Want</label>
                                <h4>{{$layanan->nama}}</h4>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="treatment">Harga</label>
                                <h4>{{$layanan->harga}}</h4>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                            <button class="btn btn-success rounded-pill px-4 py-3 text-white text-uppercase mb-4 ms-4" id="pay-button" type="button">Bayar Disini</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="p-4 mb-3 bg-white">
                        
                        <p class="mb-0 font-weight-bold">Nama</p>
                        <p class="mb-4"><a href="#"></a>{{Auth::user()->nama}}</p>

                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">{{Auth::user()->alamat}}</p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="c8bba5a9a0bba58aa1a5a7baa6bba2e6aba7a5">{{Auth::user()->email}}</span></a></p>
                    </div>

                    <div class="p-4 mb-3 bg-white">
                        <img src="{{asset('front/img')}}/{{$layanan->foto}}" alt="Image" class="img-fluid mb-4 rounded">
                        <h3 class="h5 text-black mb-3">{{$layanan->nama}}</h3>
                        <p>{{$layanan->deskripsi}}</p>
                        <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- Cart Page End -->
<script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snapToken }}', {
          onSuccess: function(result){
            window.location.href = '{{url('success')}}';
          },
          onPending: function(result){
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>

@endsection
