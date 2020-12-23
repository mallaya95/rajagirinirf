<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div>
      
          <p class="app-sidebar__user-designation">{{Session::get('email')}}</p>
        </div>
  

      </div>
      <ul class="app-menu">
     <li><a class="app-menu__item" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
         <li><a class="app-menu__item" href="{{ url('teaching') }}"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Teaching Learning Resources</span></a></li>
        <a class="app-menu__item" href="{{ url('research')}}"> <i class="app-menu__icon fa fa-search-plus"></i><span class="app-menu__label">Research and proffessional practice</span></i></a>
          
        </li>
        </li>
       

       
        <li><a class="app-menu__item" href="{{ url('graduation') }}"><i class="app-menu__icon fa fa-leanpub"></i><span class="app-menu__label">Graduation outcome</span></a></li>

        <!-- <li><a class="app-menu__item" href=""><i class="app-menu__icon fa fa-credit-card"></i><span class="app-menu__label">Bill</span></a></li> -->
        <li><a class="app-menu__item" href="{{ url('outreach') }}"><i class="app-menu__icon fa fa-outdent"></i><span class="app-menu__label">Outreach and Inclusivity</span></a></li>
        <li><a class="app-menu__item" href="{{ url('queries') }}"><i class="app-menu__icon fa fa-question-circle-o"></i><span class="app-menu__label">Quries from NIRF</span></a></li>

   
      </ul>
    </aside>