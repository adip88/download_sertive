<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Main</li>
        <li>
            <a href="{{ route('home') }}" class="waves-effect">
                <i class="ti-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (auth()->user()->level == 'pinpinan')
            <li>
                <a href="{{ route('employee.index') }}">
                    <i class="ti-user"></i>
                    <span>Employee</span>
                </a>
            </li>
            <li>
                <a href="{{ route('employee.list') }}">
                    <i class="ti-list"></i>
                    <span>List Certificate</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->level == 'admin')
            <li>
                <a href="{{ route('participant.index') }}">
                    <i class="ti-user"></i>
                    <span>Participant</span>
                </a>
            </li>
            <li>
                <a href="{{ route('certificate.index') }}">
                    <i class="ti-folder"></i>
                    <span>Certificate</span>
                </a>
            </li>
            <li>
                <a href="{{ route('list.index') }}">
                    <i class="ti-list"></i>
                    <span>List Certificate</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->level == 'peserta')
            <li>
                <a href="{{ route('download.index') }}">
                    <i class="ti-download"></i>
                    <span>Download</span>
                </a>
            </li>
            <li>
        @endif
    </ul>
</div>
