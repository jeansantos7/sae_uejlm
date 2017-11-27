<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab"></a></li>
        <li><a href="#list" data-toggle="tab"> <div class="ripple-container"></div></a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">
            <div class="row">
                <div class="col-lg-4">
                    <select id="mes" name="mes" onchange="valor(this.value)">
                        <option value=""></option>
                        <option value="1">E</option>
                        <option value="2">F</option>
                        <option value="3">M</option>
                        <option value="4">A</option>
                        <option value="5">Ma</option>
                        <option value="6">J</option>
                        <option value="7">Ju</option>
                        <option value="8">A</option>
                        <option value="9">S</option>
                        <option value="10">O</option>
                        <option value="11">N</option>
                        <option value="12">D</option>
                    </select>    
                </div>
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="list">


        </div>
    </div>

    <script>
        function  valor(a) {

            $.ajax({
                data:,
                url: "",
                type: 'POST',
                beforeSend: function (xhr) {

                },
                success: function (data, textStatus, jqXHR) {

                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        }

    </script>

