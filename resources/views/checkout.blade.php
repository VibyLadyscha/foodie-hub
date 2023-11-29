<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/keranjang.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Check Out | FoodieHub</title>
</head>
<body>
<section class="fifty" >
    <div class="main-container">
      <nav class="navbar">
        <img src="{{ asset('img/F odie 1.png') }}" style="position:relative; left: 20px">
        <?php
        $notif = App\Models\TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->value('temporary_quantity');
        ?>
      <ul>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 120px; height: 50px; font-size: 22px; font-family: League Spartan;">
              @auth
              {{auth()->user()->username}}
              @endauth
            </button>
            <ul class="dropdown-menu">
              <form action="/logout" method="POST"> 
                @csrf
                <li style="font-size: 20px; font-family: League Spartan; font-weight: 800;"><button type="submit" class="dropdown-item">Logout</button></li>
            </ul>
            </form>
          </div>
    </ul>
    </div>
  </nav>
  <div class="text" style="left: 145px; top: 184px">
  </div>
  </section>
          <section>
          <div style=" position:relative; top: 20px; left: 30px; color: #40916c; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">
  <a href="{{ url('dashboard') }}"><img src="{{ asset('img/Panahkiri.svg') }}" style=" position:relative; width: 2%; top: -5px"></a>   Check Out       
</div>
            
            <div style="position:relative; color: black; font-size: 30px; font-family: League Spartan; word-wrap: break-word;">
            <table class="table" style="width: 90%; margin-left: 4%; margin-right: 5%; margin-bottom: 50px;">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Produk</th>
                      <th>Nama Produk</th>
                      <th>Jumlah</th>
                      <th style="text-align: center">Note</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no = 1; ?>
                  @foreach($detail_orders as $detail_order)
                  <tr>
                      <td>{{ $no++ }}</td>
                      <td><img src="{{ asset('img') }}/{{ $detail_order->products->product_image }}" width="100" alt="..."></td>
                      <td>{{ $detail_order->products->product_name }}</td>
                      <td>{{ number_format($detail_order->quantity) }}</td>
                      <td>{{ $detail_order->note }}</td>
                      <td>Rp. {{ number_format($detail_order->price) }}</td>
                      <td>
                        <a href="{{ url('editorder') }}/{{ $detail_order->id }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                      </a>
                          <form action="{{ url('checkout') }}/{{ $detail_order->id }}" method="POST">
                              @csrf
                              {{ method_field('DELETE') }}
                              <button class="btn btn-danger btn-sm" onclick="showWarning(event)"><i class="bi bi-trash"></i>

                              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                              </svg>
                            </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach

                  <form action="{{ url('checkout') }}/{{ $temporary_order->id }}" method="POST">
                    @csrf
                  <tr>        
                    <div class="btn-group" style="position:relative; top: 90px; left: 150px">
                    <td colspan="5"><strong>Metode Pembayaran</strong></td>
                    <td><select name="payment_id" class="btn-group" style="width: 175px; height: 50px; font-size: 30px; font-family: League Spartan; font-weight: 200; word-wrap: break-word;">
                    <option value="" style="text-align: center">-- Pilih --</option>
                        @foreach($payments as $payment)
                        <option value="{{ $payment->id }}">{{ $payment->payment_method }}</option>
                        @endforeach
                      </select>
                      </td>
                    </div> 
                  </tr>
                  <tr>
                      <td colspan="5"><strong>Total Price</strong></td>
                      <td><strong>Rp. {{ number_format($temporary_order->temporary_price) }}</strong></td>
                  </tr>              
                </tbody>
              </table>
            </div>
            <button class="btn btn-secondary btn-lg" type="submit" aria-expanded="false" style="background-color: #167918; border-color: #c2f3ff; float: right; margin-right: 15%; font-size: 30px;"> Check Out</button>
            </form>
          </section>
        </div>

      @include('sweetalert::alert')
      <script>
        function showWarning(event) {
          event.preventDefault(); // Untuk membatalkan fungsi default javascriptnya
          Swal.fire({
            icon: 'warning',
            title: 'Apakah anda yakin ingin menghapus pesanan?',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
          }).then((result) => {
            if (result.isConfirmed) {
              event.target.closest('form').submit(); // Untuk submit form jika user memilih ya
            } else {
              window.location.href = "{{ url('checkout') }}"; // Untuk redirect halaman jika user memilih tidak
            }
          });
        }
      </script>
</body>
</html>