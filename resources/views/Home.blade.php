
@extends('Layouts.navLayout')

@section('content')

  <style>

    body {
        /* font-family: 'Nunito', sans-serif; */
        font-family: "Times New Roman", Times, serif;
        padding-left: 10%;
        padding-right: 10%;
        background-color: gray;
    }  
    
    .topnav a.active:hover {
        opacity: 0.6;
    }
    .column1 {
        width: 48%;
    }
    .center{
      padding: 0 25% 2%;
      margin: 5%;
    }
    
    .center h1 {
        text-align: center;
        padding: 20px 0;
        padding-left: 30px;
        border-bottom: 1px solid silver;
    }
     
    .txt_field {
        margin-bottom: 15px;
        align-items: left;
        background-color: transparent;
    }
    
    @media screen and (max-width:420px) {
        .txt_field {
            flex-direction: column;
            align-items: flex-start;
        }
 
        .center {
            width: 100%;
            padding-left: 0;
            margin: 0;
        }
        .column1 {
            width: 100%;
            padding-right: 0px;

        }
       
        body {
            padding-right: 6%;
        }
    }
        
    .profile_dd{
        top: 58px; 
        right: 280px;
        height: auto;
    }

    .txt_field li{
      border-bottom: 1px solid #f1f2f4;
      padding: 10px 20px;
      display: flex;
      align-items: center;
    }
    .txt_field li a{
        color: blue;
        padding: 8px 0px 8px 0px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 20px;
        display: block;
        transition: 0.3s;
        position: relative;
        width: 100%;
        text-align: center;
    }

    .txt_field span{
        color: black;
        font-size: 25px;
        display: block;
        text-align: center;
        height: 30px;
        padding: 10px 0 0;
        border-bottom: 1px solid silver;
        background-color: rgb(222, 233, 248);
    }

    .txt_field .ull  a:hover{
        color: #3b80f9;
        background: transparent;
        background: #d3dff8;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        cursor: pointer;
    }
        
  </style>

  
  <div class="center">
    
    <div class="txt_field">

    @if($LoggedUser)
    <h1>{{$LoggedUser['name']}}</h1>
    @endif
  
       
      <div class="ull">
        @if($LoggedUser['role']=== 'Officer')

          @if($officer)
          
            @if($officer['college'] === 'Officers')
              <span>Officer</span>
              @if($officer['department'] === 'HRM')
                <li><a href="/officers/HRM">HRM Officer</a></li>
              @endif
              @if($officer['department'] === 'Dining')
                <li><a href="/officers/dining office">Dining Officer</a></li>
              @endif
              @if($officer['department'] === 'Library')
                <li><a href="/officers/library">Library</a></li>
              @endif
              @if($officer['department'] === 'Registrar')
              <li><a href="/officers/registrar">Registrar</a></li>
              @endif
              @if($officer['department'] === 'Cashier')
              <li><a href="test">Cashier Officer</a></li>
              @endif
              @if($officer['department'] === 'Anti Corruption')
              <li><a href="test">Anti Corruption</a></li>
              @endif
              @if($officer['department'] === 'ICT Property')
              <li><a href="test">ICT Property Officer</a></li>
              @endif
              @if($officer['department'] === 'EngCollege Finance')
              <li><a href="test">Engineering College Finance Officer</a></li>
              @endif
              @if($officer['department'] === 'Finance')
              <li><a href="test">Finance Officer</a></li>
              @endif
              @if($officer['department'] === 'General Service')
              <li><a href="test">General Service Officer</a></li>
              @endif
              @if($officer['department'] === 'Property Officer')
              <li><a href="test">Property Officer</a></li>
              @endif
              @if($officer['department'] === 'Research')
              <li><a href="test">Research Officer</a></li>
              @endif
              @if($officer['department'] === 'StudResidence Office')
              <li><a href="/officers/student residence">Student Residence Officer</a></li>
              @endif
              
            @endif

            @if($officer['college'] !== 'Officers')
            <span>Department Officer</span>
            @endif
 
            @if($officer['college'] === 'engineering')
              @if($officer['department'] === 'Electrical and Computer Engineering')
              <li><a href="test">Electrical and Computer Engineering</a></li>
              @endif
              @if($officer['department'] === 'Mechanical Engineering')
              <li><a href="test">Mechanical Engineering</a></li>
              @endif
              @if($officer['department'] === 'Civil Engineering')
              <li><a href="test">Civil Engineering</a></li>
              @endif
              @if($officer['department'] === 'Chemical Engineering')
              <li><a href="test">Chemical Engineering</a></li>
              @endif
              @if($officer['department'] === 'Industrial Engineering')
              <li><a href="test">Industrial Engineering</a></li>
              @endif
              @if($officer['department'] === 'CoTM Engineering')
              <li><a href="test">CoTM Engineering</a></li>
              @endif
              
            @endif

            @if($officer['college'] === 'Computing')
              @if($officer['department'] === 'Information Technology')
              <li><a href="test">Information Technology</a></li>
              @endif
              @if($officer['department'] === 'Computer Science')
              <li><a href="test">Computer Science</a></li>
              @endif
              @if($officer['department'] === 'Information System')
              <li><a href="test">Information System</a></li>
              @endif
              @if($officer['department'] === 'Software Engineering')
              <li><a href="test">Software Engineering</a></li>
              @endif
              
            @endif

            @if($officer['college'] === 'Freshman')
              @if($officer['department'] === 'Social Freshman')
              <li><a href="test">Social Freshman</a></li>
              @endif
              @if($officer['department'] === 'Natural Freshman')
              <li><a href="test">Natural Freshman</a></li>
              @endif
              
            @endif
 
            @if($officer['college'] === 'Law')
              @if($officer['department'] === 'Law')
              <li><a href="test">Law</a></li>
              @endif
              
            @endif
 
            @if($officer['college'] === 'Education')
              @if($officer['department'] === 'Technical Drawing')
              <li><a href="test">Technical Drawing</a></li>
              @endif
              @if($officer['department'] === 'Business Education')
              <li><a href="test">Business Education</a></li>
              @endif
              @if($officer['department'] === 'Special need Education')
              <li><a href="test">Special need Education</a></li>
              @endif
              
            @endif
 
            @if($officer['college'] === 'Social Science')
              @if($officer['department'] === 'Psychology')
              <li><a href="test">Psychology</a></li>
              @endif
              @if($officer['department'] === 'Geography')
              <li><a href="test">Geography and Environmental Studies</a></li>
              @endif
              @if($officer['department'] === 'Sociology')
              <li><a href="test">Sociology</a></li>
              @endif
              
              @if($officer['department'] === 'Amharic')
              <li><a href="test">Amharic</a></li>
              @endif
              @if($officer['department'] === 'History')
              <li><a href="test">History and Heritage Management</a></li>
              @endif
              @if($officer['department'] === 'Civics')
              <li><a href="test">Civics and Ethical Studies</a></li>
              @endif
              @if($officer['department'] === 'English')
              <li><a href="test">English</a></li>
              @endif
              
              @if($officer['department'] === 'Journalism')
              <li><a href="test">Journalism and Communication</a></li>
              @endif
              
            @endif
 
            @if($officer['college'] === 'Business')
              @if($officer['department'] === 'Management')
              <li><a href="test">Management</a></li>
              @endif
              @if($officer['department'] === 'Acounting')
              <li><a href="test">Acounting and Finance</a></li>
              @endif
              @if($officer['department'] === 'Economics')
              <li><a href="test">Economics</a></li>
              @endif
              @if($officer['department'] === 'Tourism')
              <li><a href="test">Tourism and Heritage Management</a></li>
              @endif
              @if($officer['department'] === 'Logistics')
              <li><a href="test">Logistics Supply Chain Management</a></li>
              @endif
              
              @if($officer['department'] === 'Marketing')
              <li><a href="test">Marketing Management</a></li>
              @endif
              
            @endif
            
            @if($officer['college'] === 'Computational')
               
              @if($officer['department'] === 'Statistics')
              <li><a href="test">Statistics</a></li>
              @endif
              @if($officer['department'] === 'Physics')
              <li><a href="test">Physics</a></li>
              @endif
              @if($officer['department'] === 'Mathematics')
              <li><a href="test">Mathematics</a></li>
              @endif
              @if($officer['department'] === 'Sport Science')
              <li><a href="test">Sport Science</a></li>
              @endif
              @if($officer['department'] === 'Biology')
              <li><a href="test">Biology</a></li>
              @endif
              @if($officer['department'] === 'Biotechnology')
              <li><a href="test">Biotechnology</a></li>
              @endif
              @if($officer['department'] === 'Chemistry')
              <li><a href="test">Chemistry</a></li>
              @endif
              @if($officer['department'] === 'Geology')
              <li><a href="test">Geology</a></li>
              @endif
              
            @endif
 
            @if($officer['college'] === 'Agriculture')
              @if($officer['department'] === 'Natural Resource Management')
              <li><a href="test">Natural Resource Management</a></li>
              @endif
              @if($officer['department'] === 'Animal  Science')
              <li><a href="test">Animal  Science</a></li>
              @endif
              @if($officer['department'] === 'Agriculture Economics')
              <li><a href="test">Agriculture Economics</a></li>
              @endif
              @if($officer['department'] === 'Horticulture')
              <li><a href="test">Horticulture</a></li>
              @endif
              @if($officer['department'] === 'Plant Science')
              <li><a href="test">Plant Science</a></li>
              @endif
              
            @endif
            
          @endif

        @endif

        @if($teacher or $adminStaff or $regUser or $extnUser or $disUser)
          <span>Clearance Request</span></br>
          
          @if($teacher)
          <li><a href="test">Teacher</a></li>
          @endif
          @if($adminStaff)
          <li><a href="test">Administrator Staff</a></li>
          @endif
          @if($regUser)
          <li><a href="test">Regular Student</a></li>
          @endif
          @if($extnUser)
          <li><a href="test">Extension Student</a></li>
          @endif
          @if($disUser)
          <li><a href="test">Distance Student</a></li>
          @endif
        @endif
       
      </div>
    </div>

  </div>
   

 
@endsection
