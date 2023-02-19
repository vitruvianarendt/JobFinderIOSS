<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>My CV</title>

    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px;}
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; padding: 40px 100px 0 20px;  min-height: 900px; border-right: #1b1e21 solid 1px; border-left: #1b1e21 solid 1px}
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
    </style>
</head>

<body>

@if($cv->template_id == 1)
    <div id="page-wrap">

        <div id="contact-info" class="vcard">

            <!-- Microformats! -->

            <h1 class="fn">{{$cv->name}}</h1>
            <h2 class="fn">{{$cv->profession}}</h2>

            <br>
            Cell: <span class="tel">{{$cv->phone}}</span><br />
            Email: <span class="tel">{{$cv->email}}</span><br />
            Year of Birth: <span class="tel">{{$cv->age}}</span><br />
            Address: <span class="tel">{{$cv->country}}, {{$cv->city}}, {{$cv->zip}} </span><br />
            </p>
        </div>

        <div class="clear"></div>

        <dl style="margin-top: 60px">
            <dd class="clear"></dd>

            <dt>Education</dt>
            <dd>
                <h2>{{$cv->uni}}</h2>
                <p><strong>Title:</strong> {{$cv->degree}}<br />
                    <strong>Graduation Year:</strong> {{$cv->gradyear}}</p>
            </dd>

            <dd class="clear"></dd>

            <dt>Skills</dt>
            <dd>
                <h2>Skills</h2>
                <p>{{$cv->skills}}</p>
            </dd>

            <dd class="clear"></dd>

            <dt>Experience</dt>
            <dd>
                <h2>Work Experience</h2>
                <p>{{$cv->workdescription}}</p>
            </dd>
            <dd class="clear"></dd>
            <dt>Summary</dt>
            <dd>
                <h2>Work Experience</h2>
                <p>{{$cv->summary}}</p>
            </dd>
        </dl>

        <div class="clear"></div>

    </div>
@elseif($cv->template_id == 2)
    <div id="page-wrap" style="background-color: lightgrey">

        <div id="contact-info" class="vcard" style="background-color: #1a202c; color: whitesmoke; padding: 40px">

            <!-- Microformats! -->

            <h1 class="fn">{{$cv->name}}</h1>
            <h2 class="fn">{{$cv->profession}}</h2>

            <br>
            Cell: <span class="tel">{{$cv->phone}}</span><br />
            Email: <span class="tel">{{$cv->email}}</span><br />
            Year of Birth: <span class="tel">{{$cv->age}}</span><br />
            Address: <span class="tel">{{$cv->country}}, {{$cv->city}}, {{$cv->zip}} </span><br />
            </p>
        </div>

        <div class="clear"></div>

        <dl style="margin-top: 60px">
            <dd class="clear"></dd>

            <dt style="background-color: #3d4852">Education</dt>
            <dd>
                <h2>{{$cv->uni}}</h2>
                <p><strong>Title:</strong> {{$cv->degree}}<br />
                    <strong>Graduation Year:</strong> {{$cv->gradyear}}</p>
            </dd>

            <dd class="clear"></dd>

            <dt style="background-color: #3d4852">Skills</dt>
            <dd>
                <h2>Skills</h2>
                <p>{{$cv->skills}}</p>
            </dd>

            <dd class="clear"></dd>

            <dt style="background-color: #3d4852">Experience</dt>
            <dd>
                <h2>Work Experience</h2>
                <p>{{$cv->workdescription}}</p>
            </dd>
            <dd class="clear"></dd>
            <dt style="background-color: #3d4852">Summary</dt>
            <dd>
                <h2>Work Experience</h2>
                <p>{{$cv->summary}}</p>
            </dd>
        </dl>

        <div class="clear"></div>

    </div>
@endif

</body>

</html>
