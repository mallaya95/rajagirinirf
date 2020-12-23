@extends('layout.main')
@section('content')




   <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Home</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">About NIRF</h3>
           <div class="col-lg-12 ml-auto p-lg-5 mt-4 mt-lg-0 mb-3 text-black"><p> The National Institutional Ranking Framework (NIRF) is a methodology adopted by the Ministry of Education , Government of India, to rank institutions of higher education in India. The Framework was approved by the MHRD and launched by Minister of Human Resource Development on 29 September 2015. There are separate rankings for different types of institutions depending on their areas of operation like universities and colleges, engineering institutions, management institutions, pharmacy institutions and architecture institutions. The Framework uses several parameters for ranking purposes like resources, research, and stakeholder perception. These parameters have been grouped into five clusters and these clusters were assigned certain weightages.</p></div>
           
          </div>
        </div>
      
        
         
        
      </div>

@endsection
@section('add_scripts')

@endsection