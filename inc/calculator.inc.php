<script>
    jQuery(document).ready(function ($) {
        var tbodys = document.getElementsByTagName("tbody");
        var i = 0;
        while (i < tbodys.length) {
            var elm = tbodys.item(i);
            var trs = elm.getElementsByTagName("tr");
            var j = 1;
            while (j < trs.length) {
                if(trs.item(j).className === "tr_table") {
                    j++;
                    continue;
                }

                var td_1 = document.createElement("td");
                td_1.setAttribute("class", "column_5");
                var input = document.createElement("input");
                input.setAttribute("data_id", i+"_"+j);
                var price = trs.item(j).getElementsByTagName("td").item(3).innerText.replace("от ", "");
                input.setAttribute("data_price", price);
                td_1.appendChild(input);

                var td_2 = document.createElement("td");
                td_2.setAttribute("class", "column_6");
                td_2.textContent = "Итого: ";
                var span = document.createElement("span");
                span.setAttribute("id", i+"_"+j);
                td_2.appendChild(span);

                trs.item(j).appendChild(td_1);
                trs.item(j).appendChild(td_2);
                j++
            }
            i++
        }

        var theads = document.getElementsByTagName("thead");
        i = 0;
        while (i < theads.length) {
            var elm = theads.item(i);
            var col_4 = elm.getElementsByClassName("column_4");
            col_4[0].setAttribute("colspan", 3);
            i++;
        }

        var titles = document.getElementsByClassName("table_title");
        i = 0;
        while (i < titles.length) {
            titles[i].setAttribute("colspan", 6);
            i++;
        }

        $(".column_5").keyup(function(eventObject) {
            var input=eventObject.target;
            var price = input.getAttribute("data_price")*input.value;
            $("#"+input.getAttribute("data_id")).text(price);
        });
    });
</script>
<div class="calculator">
<?php include "price.table.inc"; ?>
</div>
