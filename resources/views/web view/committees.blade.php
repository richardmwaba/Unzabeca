@extends('layouts.webview')

@section('title', 'Committees')

@section('content')


    <section class="page-header-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Committees</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="active">Committees</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
        <div class="content-wrapper">
            <section class="about-us-wrapper">
                <h2>Finance Committee</h2>
                <div class="row margin-bottom-60" style="font-size: 15px">

                    <p>
                        The Finance committee is one of the most important committee of the
                        association and it is tasked to raise revenue for the operations of the association.
                        It undertakes and organises all possible fundraising ventures. It is also
                        responsible for all the association’s owned businesses and carries out audits
                        for funds raised by other committees and members. The following are some
                        of the fundraising ventures conducted:
                        <ol style="list-style-type: disc">
                            <li>Let’s sell and advertise events</li>
                            <li>Computer trainings</li>
                            <li>Fundraising dinners</li>
                            <li>Skills development seminars and workshops.</li>
                            <li>Linking the association with corporate sponsors</li>
                            <li>Other creative and innovative ventures</li>
                        </ol>
                    </p>

                    <h2>Projects Committee</h2>
                    <p>
                        The Projects committee is the academic and innovative wing of the association and in
                        achieving its mandate the committee does the following;
                        <ol style="list-style-type: disc">
                            <li>Provide free academic aid to first year students in introductory macro and micro economics</li>
                            <li>Organizes events as well as other activities the association deem necessary</li>
                        </ol>
                    </p>

                    <h2>Radio and Arts Committee</h2>
                    <p>
                        Radio and arts committee runs a radio programme on UNZA radio every Wednesday at 09:00
                        hrs dubbed <i>“the economy and you”</i> sponsored by PMRC and publishes informative and
                        educative articles in various media houses
                    </p>

                    <h2>Publicity Committee</h2>
                    <p>
                        The Publicity Committee is the organ in charge of public relations affairs and advertisement of the association.
                    </p>

                    <h2>Research Committee</h2>
                    <p>
                        Conducts cutting edge research on pertinent issues around the economy as well as the
                        university. Some the committee’s knowledge products include the report dubbed “Living and
                        academic conditions, do they matter? with support from ZIPAR.
                    </p>
                </div><!-- /.row -->

            </section><!-- /.about-us-wrapper -->

        </div><!-- /.content-wrapper -->
    </div><!-- /.container -->

@endsection
