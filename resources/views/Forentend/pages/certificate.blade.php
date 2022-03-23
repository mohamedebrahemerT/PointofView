

    <div id="content">
        {!! $certificate->content !!}
    </div>
<div class="row justify-content-center">
    <div class="col-auto lblock">
        <button onclick="printDiv()" class="btn btn-dark" id="print">طباعة</button>
    </div>
</div>


    <script>
        function printDiv() {

            var divToPrint = document.getElementById('content');

            var newWin = window.open('', 'Print-Window');

            newWin.document.open();

            newWin.document.write('<html><body dir="rtl" onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

            newWin.document.title = 'شهادة حضور';

            newWin.document.close();
            setTimeout(function () {
                newWin.close();
            }, 100000);

        }
    </script>
