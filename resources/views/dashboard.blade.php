
@extends('template')

@section('judul')
Dashboard
@stop

@section('ac-dash')
active
@stop

@section('subjudul')
Control Panel
@stop

@section('content')
<style>
  .carosel{
    padding-top:35px;
    margin:10px;
   
  }
  .box{ 
    border-radius:7px;
    box-shadow:2px 2px 10px rgb(22, 22, 22);
  }
  .story{
    margin:10px;
  }
  /* ini css flip box*/
  .flip-box {
  background-color: cyan;
  width: 220px;
  height: 120px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; 
  box-shadow:2px 2px 10px rgb(22, 22, 22);
  border-radius:5px;
   /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.9s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateX(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius:5px;
}
/* Style the back side */
.flip-box-back {
  transform: rotateX(180deg);
} /* ini akhir css flip box*/

</style>


<!--flip box-->     
<div class="container-fluid">
  <div class="row">
      <div class="col-md-3">   
    
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front" style="background: linear-gradient(to top left, #000099 25%, #ffcccc 100%); height:120px; width:220px;">
                <h1 style="color:white; font-family:buxton sketch;">{{ $jumlahbuku }}</h1>
              <h1 style="color:white; font-family:buxton sketch;margin:6px;"> Jumlah Buku</h1>
               
              </div>
              <div class="flip-box-back"style="background-color:rgb(2, 3, 43)">
                <h3 style="color:white; font-family:garamond;">Untuk melihat data buku, silahkan klik icon berikut <a href="{{ url('buku') }}"><i class="fa fa-book"></i></a></h3>
              </div>
            </div>
          </div>
                
      </div> 
      <div class="col-md-3">   
    
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front" style="background: linear-gradient(to left, #cc9900 0%, #cccc00 100%); height:120px; width:220px;">
            <h1 style="color:white; font-family:buxton sketch;">{{ $jumlahanggota }}</h1>
          <h2 style="color:white; font-family:buxton sketch;margin:6px;"> Jumlah Anggota</h2>
          
          </div>
          <div class="flip-box-back"style="background-color:rgb(2, 3, 43)">
            <h3 style="color:white; font-family:garamond;">Untuk melihat data anggota, silahkan klik icon berikut <a href="{{ url('anggota') }}"><i class="fa fa-user"></i></a></h3>
          </div>
        </div>
      </div>
            
    </div> 
    <div class="col-md-3">   
        
        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="flip-box-front" style="background: linear-gradient(to right, #33cc33 0%, #33cc33 100%); height:120px; width:220px;">
              <h1 style="color:white; font-family:buxton sketch;">{{ $jumlahuser }} orang</h1>
            
            <h1 style="color:white; font-family:buxton sketch;margin:6px;"> Jumlah User</h1>
            </div>
            <div class="flip-box-back"style="background-color:rgb(2, 3, 43)">
              <h3 style="color:white; font-family:garamond;">Untuk melihat data user, silahkan klik icon berikut <a href="{{ url('user') }}"><i class="fa fa-users"></i></a></h3>
            </div>
          </div>
        </div>
              
      </div> 
      <div class="col-md-3">   
          
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front" style="background: linear-gradient(to left, #cc0000 0%, #663300 100%); height:120px; width:220px;">
                <h1 style="color:white; font-family:buxton sketch;">Penerbit</h1>
              <h1 style="color:white; font-family:buxton sketch;margin:6px;"> Buku</h1>
              
              </div>
              <div class="flip-box-back"style="background-color:rgb(2, 3, 43)">
                <h3 style="color:white; font-family:garamond;">Untuk melihat data penerbit, silahkan klik icon berikut <a href="{{ url('penerbit') }}"><i class="fa fa-industry"></i></a></h3>
              </div>
            </div>
          </div>
                
      </div> 
  </div>
</div>
<!--end flip box-->

  <!-- START ACCORDION & CAROUSEL-->
<hr>
<div class="container-fluid">
<div class="box box-danger">
<div class="row">
  <div class="story">
  <div class="col-md-6">
      <div class="box-header with-border">
        <h3 class="box-title">Riwayat Peminjaman</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No Pinjam</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Tanggal Pinjam</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($order as $rsOrder)
                  <tr>
                  <td>{{ $rsOrder->no_pinjam }}</td>
                  <td>{{ $rsOrder->nama}}
                  </td>
                  <td>{{ $rsOrder->judul}}</td>
                  <td>{{ $rsOrder->tgl_pinjam}}
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>  
  </div><!-- /.col -->
  <div class="carosel">
    <div class="col-md-6">
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title" style="font-family:buxton sketch";>Quotes</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/quotes1.jpg" alt="First slide" style="height:300px !important; width:500px !important; border-radius: 10px">

              <div class="carousel-caption">
                First Slide
              </div>
            </div>
            <div class="item">
              <img src="img/quotes2.jpg" alt="Second slide"style="height:300px !important; width:500px !important; border-radius: 10px">

              <div class="carousel-caption">
                Second Slide
              </div>
            </div>
            <div class="item">
              <img src="img/quotes3.jpg" alt="Third slide"style="height:300px !important; width:500px !important;border-radius: 10px">

              <div class="carousel-caption">
                Third Slide
              </div>
            </div>
            <div class="item">
              <img src="img/quotes4.jpg" alt="Fourth slide"style="height:300px !important; width:500px !important;border-radius: 10px">

              <div class="carousel-caption">
                Third Slide
              </div>
            </div>
            <div class="item">
              <img src="img/quotes5.jpg" alt="five slide"style="height:300px !important; width:500px !important;border-radius: 10px">

              <div class="carousel-caption">
                Third Slide
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
        </div>
        </div>
      </div><!-- /.box-body -->      
    </div><!-- /.box --> 
  </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- box danger-->
</div><!-- container-->
<!-- END ACCORDION & CAROUSEL-->

@stop
