@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color: #46b8da;">
    @if(\Auth::Check())
      <a href="{{url('/employment/submission')}}"><button class="btn-danger adminbtn">Submissions</button></a>
    @endif
    <h2>Employment Opportunity</h2>
    <div class='col-md-10 col-md-offset-1' style="padding-bottom: 2em">    
      {{Form::open(['action' => 'EmploymentController@store'])}}
      <h3>Application For Employment</h3>
        <div class="form-group">
          {{Form::label('date', "Today's Date:")}}
          {{Form::text('date', null, ['class' => 'form-control', 'placeholder' => "Enter Today's Date"])}}

          {{Form::label('name', 'Full Name:')}}
          {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}

          {{Form::label('address', 'Home Address:')}}
          {{Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Street, City, State, Zip'])}}

          {{Form::label('religion', 'Religion:')}}
          {{Form::text('religion', null, ['class' => 'form-control', 'placeholder' => 'Enter Religion'])}}
		</div>
		<div class="form-group">
          {{Form::label('sex', 'Sex: ')}}
          {{Form::radio('sex', 'Male')}} {{Form::label('sex', ' Male')}}
          {{Form::radio('sex', 'Female')}} {{Form::label('sex', ' Female')}}
		</div>
		<div class="form-group">
          {{Form::label('age', 'Age:')}}
          {{Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Enter Age'])}}

          {{Form::label('dob', 'Date of Birth:')}}
          {{Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Enter Date of Birth'])}}          

          {{Form::label('phone', 'Phone Number:')}}
          {{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}  

          {{Form::label('social', 'Social Security Number:')}}
          {{Form::text('social', null, ['class' => 'form-control', 'placeholder' => 'Enter Social Security Number'])}}        
          {{Form::label('marital_status', 'Marital Status:')}}
          {{Form::text('marital_status', null, ['class' => 'form-control', 'placeholder' => 'Enter Marital Status'])}}

          {{Form::label('dependents', 'Number of Dependents:')}}
          {{Form::text('dependents', null, ['class' => 'form-control', 'placeholder' => 'Enter Number of Dependents'])}}

          {{Form::label('position', 'Position Desired:')}}
          {{Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Enter Position Desired'])}}

          {{Form::label('salary', 'Salary Expected:')}}
          {{Form::text('salary', null, ['class' => 'form-control', 'placeholder' => 'Enter Salary Expected'])}}

          {{Form::label('available', 'Dates Available for Work:')}}
          {{Form::text('available', null, ['class' => 'form-control', 'placeholder' => 'Enter Dates Available for Work'])}}

          {{Form::label('days_hours', 'Days and hours you can work: ')}}
          {{Form::textarea('days_hours', null, ['class' => 'form-control', 'placeholder' => 'Enter Days and hours you can work:'])}}
        </div>
		<h3>Spouse Information</h3>		
        <div class="form-group">
          {{Form::label('sname', 'Enter Full Name of Spouce:')}}
          {{Form::text('sname', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name of Spouce'])}}
 
          {{Form::label('employed', 'Employed by:')}}
          {{Form::text('employed', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name of Spouce'])}}       

          {{Form::label('saddress', 'Address:')}}
          {{Form::text('saddress', null, ['class' => 'form-control', 'placeholder' => 'Enter Street, City, State, Zip'])}}   

          {{Form::label('sphone', 'Phone Number:')}}
          {{Form::text('sphone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}  
        </div>
  		<h3>Emergency Contact Information</h3>		
        <div class="form-group">
          {{Form::label('emergency_name', 'Enter Full Name:')}}
          {{Form::text('emergency_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}		
          
          {{Form::label('emergency_phone', 'Phone Number:')}}
          {{Form::text('emergency_phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}  
		</div>
  		<h3>Education Information</h3>		
        <div class="form-group">
          {{Form::label('elementary', 'Elementary School:')}}
          {{Form::text('elementary', null, ['class' => 'form-control', 'placeholder' => 'Enter Name, Courses, Years Completed'])}}

          {{Form::label('highschool', 'High School:')}}
          {{Form::text('highschool', null, ['class' => 'form-control', 'placeholder' => 'Enter Name, Courses, Years Completed'])}}

          {{Form::label('college', 'College:')}}
          {{Form::text('college', null, ['class' => 'form-control', 'placeholder' => 'Enter Name, Courses, Years Completed'])}}                      
          {{Form::label('specialization', 'Area of Specialization:')}}
          {{Form::text('specialization', null, ['class' => 'form-control', 'placeholder' => 'Enter Area of Specialization'])}}          
        </div>

        <h3>Work Experience</h3>		
        <div class="form-inline">
          {{Form::label('onefrom', '1.) Date From:')}}
          {{Form::text('onefrom', null, ['class' => 'form-control', 'placeholder' => 'Enter Date'])}} 
          {{Form::label('oneto', 'To:')}}
          {{Form::text('oneto', null, ['class' => 'form-control', 'placeholder' => 'Enter Date'])}} 
        </div>
        <div class="form-group">
          {{Form::label('oneposition', 'Position:')}}
          {{Form::text('oneposition', null, ['class' => 'form-control', 'placeholder' => 'Enter Position'])}}   

          {{Form::label('oneemployer', 'Employer:')}}
          {{Form::text('oneemployer', null, ['class' => 'form-control', 'placeholder' => 'Enter Employer'])}}

          {{Form::label('oneaddress', 'Address:')}}
          {{Form::text('oneaddress', null, ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}

          {{Form::label('onephone', 'Phone:')}}
          {{Form::text('onephone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone'])}}
        
          {{Form::label('onesalary', 'Salary:')}}
          {{Form::text('onesalary', null, ['class' => 'form-control', 'placeholder' => 'Enter Salary'])}}

          {{Form::label('oneleaving', 'Reason for Leaving:')}}
          {{Form::text('oneleaving', null, ['class' => 'form-control', 'placeholder' => 'Enter Reason for Leaving'])}}

        </div>

        <div class="form-inline"><br/>
          {{Form::label('twofrom', '2.) Date From:')}}
          {{Form::text('twofrom', null, ['class' => 'form-control', 'placeholder' => 'Enter Date'])}} 
          {{Form::label('twoto', 'To:')}}
          {{Form::text('twoto', null, ['class' => 'form-control', 'placeholder' => 'Enter Date'])}} 
        </div>
        <div class="form-group">
          {{Form::label('twoposition', 'Position:')}}
          {{Form::text('twoposition', null, ['class' => 'form-control', 'placeholder' => 'Enter Position'])}}   

          {{Form::label('twoemployer', 'Employer:')}}
          {{Form::text('twoemployer', null, ['class' => 'form-control', 'placeholder' => 'Enter Employer'])}}

          {{Form::label('twoaddress', 'Address:')}}
          {{Form::text('twoaddress', null, ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}

          {{Form::label('twophone', 'Phone:')}}
          {{Form::text('twophone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone'])}}
        
          {{Form::label('twosalary', 'Salary:')}}
          {{Form::text('twosalary', null, ['class' => 'form-control', 'placeholder' => 'Enter Salary'])}}

          {{Form::label('twoleaving', 'Reason for Leaving:')}}
          {{Form::text('twoleaving', null, ['class' => 'form-control', 'placeholder' => 'Enter Reason for Leaving'])}}
        </div>

        <h3>Other Experience</h3>
        <div class="form-group">
          {{Form::label('volunteer', 'Volunteer Experience (or work you have done with children):')}}
          {{Form::textarea('volunteer', null, ['class' => 'form-control', 'placeholder' => 'Enter Volunteer Experience'])}}
          {{Form::label('talents', 'Special Talents (Lists any talents for skills in art, music, drama, and foreign languages):')}}
          {{Form::textarea('talents', null, ['class' => 'form-control', 'placeholder' => 'Enter Talents'])}}

        </div>

        <h3>References</h3>
        <div class="form-group">
          {{Form::label('oneref', 'Give one work experience, one education and one character.  List NO relatives:')}}<br/>
          {{Form::label('oneref', '1.) Full Name:')}}
          {{Form::text('oneref', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
          {{Form::label('onerefaddress', 'Address:')}}
          {{Form::text('onerefaddress', null, ['class' => 'form-control', 'placeholder' => 'Enter Street, City, State, Zip'])}}
          {{Form::label('onerefphone', 'Phone Number:')}}
          {{Form::text('onerefphone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
        </div>
        <div class="form-group"><br/>
          {{Form::label('tworef', '2.) Full Name:')}}
          {{Form::text('tworef', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
          {{Form::label('tworefaddress', 'Address:')}}
          {{Form::text('tworefaddress', null, ['class' => 'form-control', 'placeholder' => 'Enter Street, City, State, Zip'])}}
          {{Form::label('tworefphone', 'Phone Number:')}}
          {{Form::text('tworefphone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
        </div>
        <div class="form-group"><br/>
          {{Form::label('threeref', '3.) Full Name:')}}
          {{Form::text('threeref', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
          {{Form::label('threerefaddress', 'Address:')}}
          {{Form::text('threerefaddress', null, ['class' => 'form-control', 'placeholder' => 'Enter Street, City, State, Zip'])}}
          {{Form::label('threerefphone', 'Phone Number:')}}
          {{Form::text('threerefphone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
        </div>
        <h3>Reason for Applying</h3>
		<div>
          {{Form::label('why', 'Write a SHORT paragraph telling why you are interested in applying for this position, your understanding of what working with preschoolers means, and what you think would be expected of you in this position.')}}
          {{Form::textarea('why', null, ['class' => 'form-control', 'placeholder' => 'Enter a SHORT paragraph'])}}
        </div>
        
        <div class="form-group" style="float: right">
          {{Form::submit('Submit', ['class' => 'btn-primary formbtn'])}}
        </div>
      {{Form::close()}}
      <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>
    </div>
  </div>  
@stop