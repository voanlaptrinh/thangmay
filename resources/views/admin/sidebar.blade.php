 <aside id="sidebar" class="sidebar">
     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link {{ in_array(Request::route()->getName(), ['dashboard.index']) ? '' : 'collapsed' }}" href="{{route('dashboard.index')}}">
                 <i class="bi bi-speedometer2"></i>
                 <span>Dashboard</span>
             </a>
         </li>
          <li class="nav-item">
             <a class="nav-link {{ in_array(Request::route()->getName(), ['lien_he.index.admin']) ? '' : 'collapsed' }}" href="{{route('lien_he.index.admin')}}">
                 <i class="bi bi-envelope"></i>
                 <span>Liên hệ</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link {{ in_array(Request::route()->getName(), ['web-config.edit']) ? '' : 'collapsed' }}" href="{{route('web-config.edit')}}">
                 <i class="bi bi-gear"></i>
                 <span>Cài đặt</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link {{ in_array(Request::route()->getName(), ['thangmay.index', 'thangmay.create', 'thangmay.edit', 'thangmay.show']) ? '' : 'collapsed' }}" href="{{route('thangmay.index')}}">
                 <i class="bi bi-building"></i>
                 <span>Thang máy</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link {{ in_array(Request::route()->getName(), ['project.index', 'project.create', 'project.edit']) ? '' : 'collapsed' }}" href="{{route('project.index')}}">
                 <i class="bi bi-folder"></i>
                 <span>Dự án</span>
             </a>
         </li>
     </ul>


 </aside>
