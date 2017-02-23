@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color: #46b8da;">
      @if(\Auth::Check())
        <div class="form-group" style="float:right">
        {{Form::open(['method' => 'DELETE', 'route' => ['employment.destroy', $employee->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'btn-danger formbtn'])}}
        {{Form::close()}}
      </div>
    @endif
  <h3>{{$employee->name}}</h3>
  <ul>
  	<p>
  	Date: {{$employee->date}}<br/>
  	Home Address: {{$employee->address}}<br/>
  	Religion: {{$employee->religion}}<br/>
  	Sex: {{$employee->sex}}<br/>
  	Age: {{$employee->age}}<br/>
  	Date of Birth: {{$employee->dob}}<br/>
  	Phone Number: {{$employee->phone}}<br/>
  	Social Security: {{$employee->social}}<br/>
  	Marital Status: {{$employee->marital_status}}<br/>
  	Number of Dependents: {{$employee->dependents}}<br/>
  	Position desired: {{$employee->position}}<br/>
  	Salary Expected: {{$employee->salary}}<br/>
  	Dates Available for Work: {{$employee->available}}<br/>
  	Days and hours you can work: {{$employee->days_hours}}<br/>
  	</p>
  	<h3>Spouse Information</h3>
  	<p>
  	Name: {{$employee->sname}}<br/>
  	Employed by: {{$employee->employed}}<br/>
  	Address: {{$employee->saddress}}<br/>
  	Phone Number: {{$employee->sphone}}<br/>
  	</p>
  	<h3>Emergency Contact Information</h3>
  	<p>
  	Name: {{$employee->emergency_name}}<br/>
  	Phone Number: {{$employee->emergency_phone}}<br/>
  	</p>
  	<h3>Education Information</h3>
  	<p>
  	Elementary School: {{$employee->elementary}}<br/>
  	High School: {{$employee->highschool}}<br/>
  	College: {{$employee->college}}<br/>
  	Area of Specialization: {{$employee->specialization}}<br/>
  	</p>
  	<h3>Work Experience</h3>
  	<p>
  	1.) Date From: {{$employee->onefrom}} To: {{$employee->oneto}}<br/>
  	Position: {{$employee->oneposition}}<br/>
  	Employer: {{$employee->oneemployer}}<br/>
  	Address: {{$employee->oneaddress}}<br/>
  	Phone: {{$employee->onephone}}<br/>
  	Salary: {{$employee->onesalary}}<br/>
  	Reason for Leaving: {{$employee->oneleaving}}<br/><br/>
  	2.) Date From: {{$employee->twofrom}} To: {{$employee->twoto}}<br/>
  	Position: {{$employee->twoposition}}<br/>
  	Employer: {{$employee->twoemployer}}<br/>
  	Address: {{$employee->twoaddress}}<br/>
  	Phone: {{$employee->twophone}}<br/>
  	Salary: {{$employee->twosalary}}<br/>
  	Reason for Leaving: {{$employee->twoleaving}}<br/>
  	</p>
  	<h3>Other Experience</h3>
  	<p>
  	Volunteer Experience (or work you have done with children):<br/>
  	 {{$employee->volunteer}}<br/>
  	Special Talents (Lists any talents for skills in art, music, drama, and foreign languages):<br/>
  	 {{$employee->talents}}<br/>
  	 </p>
  	 <h3>References</h3>
  	 <p>
  	1.) Name: {{$employee->oneref}}<br/>
  	Address: {{$employee->onerefaddress}}<br/>
  	Phone: {{$employee->onerefphone}}<br/><br/>
  	2.) Name: {{$employee->tworef}}<br/>
  	Address: {{$employee->tworefaddress}}<br/>
  	Phone: {{$employee->tworefphone}}<br/>
  	3.) Name: {{$employee->threeref}}<br/>
  	Address: {{$employee->threerefaddress}}<br/>
  	Phone: {{$employee->threerefphone}}<br/>
  	</p>
  	<h3>Reason for Applying</h3>
  	<p>
  	{{$employee->why}}<br/>
  	</p>
  </ul>
  </div>
@stop
@section('scripts')
	<script>
	$(".delete").on("submit", function(){
		return confirm("Do you want to delete this item?");
	});
	</script>
@stop