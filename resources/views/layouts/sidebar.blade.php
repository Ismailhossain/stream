@extends('layouts.header')
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="/">
                    StreamFrame
                </a>
            </li>
            <li>
                <a href="{{url('maintask/create')}}">Add Parent Task</a>
            </li>

            <li>
                <a href="{{url('maintask/show')}}">Parent Task List  </a>
            </li>
            <li>
                <a href="{{url('task/create')}}">Add Task</a>
            </li>
            <li>
                <a href="{{url('task/show')}}">Task List</a>
            </li>
            <li>
                <a href="{{url('alltask/show')}}">All Task List</a>
            </li>
            <li>
                <a href="{{url('login')}}">Sign In</a>
            </li>

            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    Sign Out
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            @yield('sidebar')

        </ul>

    </div>
    <!-- /#sidebar-wrapper -->
