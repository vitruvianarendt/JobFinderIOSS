<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
         .outer {
        width: 1px;
        height: 100%;
        margin: auto;
        position: relative;
        overflow: hidden;
    }
    .inner {
        position: absolute;
        width:100%;
        height: 80%;
        background: grey;
        top: 10%;
        box-shadow: 0px 0px 30px 20px grey;
    }
    .list-group-item:active {
        background-color: #00b074 !important;
    }
    .list-group-item:visited{
        background-color: #00b074 !important;
    }
    .list-group-item:hover {
        background-color: #00b074 !important;
        color: white;
    }

    </style>
    <div class="container-fluid p-5" style="margin-top: 2%">
        <h1>All Applicants</h1>
    </div>
</x-app-layout>
