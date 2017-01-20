@extends('layouts.template')
@section('content')      
<div class="container">
        <div  class='col-md-12' style='margin-bottom: 0'>
            <div class='col-md-2' style="padding: 0">
            <a href="{{url('/')}}"><img style="width: 100%" src="{{url('/img/lclogo.png')}}"></a>
            </div>
            <div class='col-md-10'>
              <h1><center>St. Paul Learning Center</center></h1>  
            </div>
        </div>
       
    <div class="col-md-12" style="padding: 0; margin: 0; border: 0; border: 2px solid black; box-shadow: 10px 10px 5px #000; min-height: 25em; background-color: #1A8BCB">

      <div class="col-md-2" style="background-color: #1A8BCB; min-height: 25em; padding: 0; margin: 0; border: 0">   
		@include('_includes.pagebtns')
      </div>


        <div class="col-md-10" style=" background-color:#1A8BCB; height: 100%"> 
          <div class="col-md-11" style="color: #fff; background-color: #d9534f; min-height: 5em; border: 2px solid black; margin: 10px; box-shadow: 5px 5px 5px #000;">

			<h2>2016-2017 TUITION & FEE SCHEDULE</h2>
			<h3>Effective July 1, 2017:</h3>
			<h3>Registration Fee</h3>
			<p>
				A non-refundable registration fee of $150.00 is paid to hold the child’s spot upon acceptance.  A yearly registration fee of $100 will be collected by March 31, 2017 to hold a child’s spot for the next school year.
			</p>
			<h3>Tuition Payment/Policy</h3>
			<h5>Tuition payment effective July 1, 2016:</h5>
			<div class="col-md-12" style="padding-bottom: 2em">
			<table>
				<tr>
					<td>Infants-Older Infants</td>
					<td>$665.00</td>
				</tr>
				<tr>
					<td>Creepers –Toddlers</td>
					<td>$645.00</td>
				</tr>
				<tr>
					<td>Twos-Fours</td>
					<td>$620.00</td>
				</tr>
				<tr>
					<td>Sibling Discount</td>
					<td>$10.00</td>
				</tr>
			</table>

			<h3>Supply/Capital Contribution Fee</h3>
			<p>
				There is an annual supply fee of $150.00 per child due by August 31, 2016 and a Capital Improvement fee of $100.00 per child due by January 31, 2017.  These fees are mandatory and non-refundable.
			</p>
			</div>


        </div>

    </div>  
</div>
@stop