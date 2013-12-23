<div id="example" class="k-content">
    <div id="grid"></div>
    <script>
        $(document).ready(function() {
            $("#grid").kendoGrid({
                dataSource: {
                    type: "json",
                    transport: {
                        read   : { url: "<?php echo base_url(); ?>" + "kendo/gridRead", type: "POST", dataType: "json" },
                        create : { url: "<?php echo base_url(); ?>" + "kendo/gridCreate", type: "POST",  dataType: "json" },
                        update : { url: "<?php echo base_url(); ?>" + "kendo/gridUpdate", type: "POST",  dataType: "json" },
                        destroy: { url: "<?php echo base_url(); ?>" + "kendo/gridDestroy", type: "POST",  dataType: "json" },
                        parameterMap: function(options, operation) {
                            if (operation !== "read" && options.models) {
                                return { models: kendo.stringify(options.models) };
                            }
                        }
                    },
                    error: function(e) {
                        //alert(e.responseText);
                    },
                    schema: {
                        model: {
                            fields: {
                                Id: {type: "number"},
                                Name: {type: "string"},
                                Title: {type: "string"},
                                Picture: {type: "string"},
                                CreatedDate: {type: "date"}
                            }
                        }
                    },
                    pageSize: 20,
                    /*serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true*/
                },
                toolbar: ["create"],
                editable: "popup",
                height: 530,
                filterable: true,
                sortable: true,
                selectable: true,
                groupable: true,
                pageable: {
                    refresh: true,
                    pageSizes: true
                },
                columnMenu: true,
                columns: [
                    {
                        field: "Id",
                        filterable: false
                    },
                    "Name",
                    "Title",
                    "Picture",
                    {
                        field: "CreatedDate",
                        title: "Created Date",
                        width: 120,
                        format: "{0:dd/MM/yyyy}"
                    }
                ]
            });
        });
    </script>
</div>