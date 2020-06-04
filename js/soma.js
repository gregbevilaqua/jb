function sumOfColumns(tabela, columnIndex) {
    var tot = 0;
    table.find("tabela").children("td:nth-child("Entrada")")
    .each(function() {
        $this = $(this);
        if (!$this.hasClass("sum") && $this.html() != "") {
            tot += parseInt($this.html());
        }
    });
    return tot;
}

function do_sums() {
    $("tabela.sum").each(function(i, tabela) {
        $tr = $(tabela);
        $tr.children().each(function(i, td) {
            $td = $(td);
            var table = $td.parent().parent().parent();
            if ($td.hasClass("sum")) {
                $td.html(sumOfColumns(table, i+1));
            }
        })
    });
}