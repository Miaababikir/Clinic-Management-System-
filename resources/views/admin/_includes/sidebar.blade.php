<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li><a href="{{ route('admin') }}" class="waves-effect"><i class="linea-icon linea-basic fa-fw"
                                                             data-icon="v"></i> <span
                            class="hide-menu"> Dashboard </span></a>
            </li>
            <li class="nav-small-cap">--- Proffessional</li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span
                            class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('appointments.index') }}">Doctor Schedule</a></li>
                    <li><a href="{{ route('appointments.all') }}">Doctor Appointments</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span
                            class="hide-menu"> Doctors <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('doctors.index') }}">All Doctors</a></li>
                    <li><a href="{{ route('doctors.create') }}">Add Doctor</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span
                            class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="patients.html">All Patients</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span
                            class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="payment-report.html">Payment Report</a></li>
                    <li><a href="income-report.html">Income Report</a></li>
                    <li><a href="sales-report.html">Sales Report</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->