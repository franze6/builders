<script>
    jQuery(document).ready(function ($) {
        var tbodys = document.getElementsByTagName("tbody");
        var i = 0;
        while (i < tbodys.length) {
            var elm = tbodys.item(i);
            var trs = elm.getElementsByTagName("tr");
            var j = 1;
            while (j < trs.length) {
                if (trs[i].className == "table_title") {
                    continue;S
                }
                var td_1 = document.createElement("td");
                td_1.setAttribute("class", "column_5");
                td_1.setAttribute("data_id", i+"_"+j);
                var input = document.createElement("input");
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
    });
</script>
<div class="calculator">
<? include "price.table.inc"; ?>
</div>
