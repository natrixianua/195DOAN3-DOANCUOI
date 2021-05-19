@extends('brach_product')
@section('content')
<style>
	.contact{
		display: flex;
	}
	.contact li:hover i{
		color: red;
	}
	
	.contact li {
		margin-left: 10%;
		background-color: transparent;
		
	}
	.contact li i {
		font-size: 250%;
		color: white;
	}
	.contact li i a{

	}
	.form{
		width: 80%;
		margin-left: 10%;
	}
</style>
<section>
<ul class="contact">
   <li><i  class="fa fa-facebook"></i><a href="https://www.facebook.com/profile.php?id=100022865804555"></a></li>
   <li><i  class="fa fa-instagram"></i><a href="https://www.facebook.com/profile.php?id=100022865804555"></a></li>
   <li><i class="fa fa-twitter"></i><a href="https://www.facebook.com/profile.php?id=100022865804555"></a></li>
   
     
   </ul>
   <form class="form">
         <input type="email" class="form__field" placeholder="Đăng Ký Subscribe Email" />
         <button type="button" class="btn btn--primary  uppercase">Gửi</button>
       </form>
 <iframe style="margin-left: 20%;width: 80%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8363715668547!2d108.14768051480779!3d16.07397868887797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218d69190822b%3A0x161153e3a8604704!2zNTYgTmd1eeG7hW4gTMawxqFuZyBC4bqxbmcsIEhvw6AgS2jDoW5oIELhuq9jLCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2shk!4v1621411934418!5m2!1svi!2shk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	
</section>


@endsection