<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="dashboard.php">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-palette menu-icon"></i>
        <span class="menu-title">Farmers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="allfarmers.php">All Farmers</a></li>
          <li class="nav-item"> <a class="nav-link" href="complains.php">All Complains</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
        <i class="mdi mdi-layers menu-icon"></i>
        <span class="menu-title">Agents</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-advanced">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="allagents.php">All Agents</a></li>
          <li class="nav-item"> <a class="nav-link" href="addagent.php">Add Agents</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Operators</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="alloperators.php">All Operators</a></li>
          <li class="nav-item"><a class="nav-link" href="addoperator.php">Add Operator</a></li>
          <li class="nav-item"><a class="nav-link" href="addopetractor.php">Add Operator Tractor</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
        <i class="mdi mdi-pencil-box-outline menu-icon"></i>
        <span class="menu-title">Transactions</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="allsuccessfultrans.php">Open Transactions</a></li>
          <li class="nav-item"><a class="nav-link" href="allsuccessfullyclosed.php">Closed Transactions</a></li>
          <li class="nav-item"><a class="nav-link" href="allfailedtrans.php">Failed Transactions</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="mdi mdi-chart-pie menu-icon"></i>
        <span class="menu-title">Clusters</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">All Clusters</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Add Cluster</a></li>
        </ul>
      </div>
    </li>

  </ul>
</nav>
