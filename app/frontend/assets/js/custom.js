async function AjaxCall(url, data) {
  var Dropdown = JSON.stringify(data);
  var result;
  await $.ajax({
    type: "Post",
    url: url,
    timeout: 999999999,
    data: Dropdown,
    dataType: "Text",
    contentType: "application/json;charset=utf-8",
    cache: false,
    async: true,
    beforeSend: function () {
      Swal.fire({
        html: `<img src="/assets/plugins/mazor/compiled/svg/grid.svg" class="me-4" style="width: 10rem" alt="audio">`,
        background: "unset",
        allowOutsideClick: false,
        showConfirmButton: false,
      });
    },
    success: function (responce) {
      if (responce == "-21") {
        window.location.href = "/SessionExpired";
      } else if (responce == "401") {
        window.location.href = "/Dashboard";
      } else {
        result = responce;
      }
      Swal.close();
    },
    error: function (error) {
      alert("Error:" + error);
    },
  });
  return result;
}

async function AjaxCallWithoutData(url) {
  var result;
  await $.ajax({
    type: "Post",
    url: url,
    dataType: "Text",
    cache: false,
    timeout: 999999999,
    async: true,
    contentType: "application/json;charset=utf-8",
    beforeSend: function () {
      Swal.fire({
        html: `<img src="/assets/plugins/mazor/compiled/svg/grid.svg" class="me-4" style="width: 10rem" alt="audio">`,
        background: "unset",
        allowOutsideClick: false,
        showConfirmButton: false,
      });
    },
    success: function (responce) {
      if (responce == "-21") {
        window.location.href = "/SessionExpired";
      } else if (responce == "401") {
        window.location.href = "/Dashboard";
      } else {
        result = responce;
      }
      Swal.close();
    },
    error: function (error) {
      alert("Error:" + error);
    },
  });
  return result;
}

function AjaxCallNoAsync(url, data) {
  var Dropdown = JSON.stringify(data);
  var result;
  $.ajax({
    type: "Post",
    url: url,
    timeout: 999999999,
    data: Dropdown,
    dataType: "Text",
    contentType: "application/json;charset=utf-8",
    cache: false,
    async: false,
    success: function (responce) {
      if (responce == "-21") {
        window.location.href = "/SessionExpired";
      } else if (responce == "401") {
        window.location.href = "/Dashboard";
      } else {
        result = responce;
      }
    },
    error: function (error) {
      alert("Error:" + error);
    },
  });
  return result;
}

async function AjaxCallWithoutData(url) {
  var result;
  await $.ajax({
    type: "Post",
    url: url,
    dataType: "Text",
    cache: false,
    timeout: 999999999,
    async: true,
    contentType: "application/json;charset=utf-8",
    success: function (responce) {
      if (responce == "-21") {
        window.location.href = "/SessionExpired";
      } else if (responce == "401") {
        window.location.href = "/Dashboard";
      } else {
        result = responce;
      }
    },
    error: function (error) {
      alert("Error:" + error);
    },
  });
  return result;
}

function AjaxCallNoAsync(url, data) {
  var Dropdown = JSON.stringify(data);
  var result;
  $.ajax({
    type: "Post",
    url: url,
    timeout: 999999999,
    data: Dropdown,
    dataType: "Text",
    contentType: "application/json;charset=utf-8",
    cache: false,
    async: false,
    success: function (responce) {
      if (responce == "-21") {
        window.location.href = "/SessionExpired";
      } else if (responce == "401") {
        window.location.href = "/Dashboard";
      } else {
        result = responce;
      }
    },
    error: function (error) {
      alert("Error:" + error);
    },
  });
  return result;
}

// This is for xls
function fnExcelParmReport(TableToExport, profile, parameter, woksheetname) {
  var tab_text = "";
  var $table = $(TableToExport);
  var $thead = $table.find("thead");
  var $tbody = $table.find("tbody");
  var $tfoot = $table.find("tfoot");
  var columncount = $thead.find("th").length;
  tab_text += '<table border="0.5px">';
  tab_text +=
    "<tr><td align='left' valign='top' colspan='" +
    columncount +
    "'>" +
    profile +
    "<br/>" +
    parameter +
    "</td></tr>";
  if ($thead.length > 0) {
    $thead.find("tr").each(function () {
      var $row = $(this);
      tab_text += "<tr>";
      $row.find("th").each(function () {
        var $cell = $(this);
        if (
          $cell.css("display") !== "none" &&
          !$cell.attr("hidden") &&
          !$cell.hasClass("excelDisable")
        ) {
          var colspan = $cell.attr("colspan") || 1;
          var rowspan = $cell.attr("rowspan") || 1;
          var cellContent = $cell
            .html()
            .replace(/<p[^>]*>/gi, "")
            .replace(/<\/p>/gi, "<br>");
          tab_text +=
            "<th colspan='" +
            colspan +
            "' rowspan='" +
            rowspan +
            "'>" +
            cellContent +
            "</th>";
        }
      });
      $row.find("td").each(function () {
        var $cell = $(this);
        if (
          $cell.css("display") !== "none" &&
          !$cell.attr("hidden") &&
          !$cell.hasClass("excelDisable")
        ) {
          var colspan = $cell.attr("colspan") || 1;
          var rowspan = $cell.attr("rowspan") || 1;
          var cellContent = $cell
            .html()
            .replace(/<p[^>]*>/gi, "")
            .replace(/<\/p>/gi, "<br>");
          tab_text +=
            "<th colspan='" +
            colspan +
            "' rowspan='" +
            rowspan +
            "'>" +
            cellContent +
            "</th>";
        }
      });
      tab_text += "</tr>";
    });
  }
  if ($tbody.length > 0) {
    $tbody.find("tr").each(function () {
      var $row = $(this);
      tab_text += "<tr>";
      $row.find("th, td").each(function () {
        var $cell = $(this);
        if (
          $cell.css("display") !== "none" &&
          !$cell.attr("hidden") &&
          !$cell.hasClass("excelDisable")
        ) {
          var colspan = $cell.attr("colspan") || 1;
          var rowspan = $cell.attr("rowspan") || 1;
          var cellContent = $cell
            .html()
            .replace(/<p[^>]*>/gi, "")
            .replace(/<\/p>/gi, "<br>");
          if ($cell.is("th")) {
            tab_text +=
              "<th colspan='" +
              colspan +
              "' rowspan='" +
              rowspan +
              "' valign='top'>" +
              cellContent +
              "</th>";
          } else {
            tab_text +=
              "<td colspan='" +
              colspan +
              "' rowspan='" +
              rowspan +
              "' valign='top'>" +
              cellContent +
              "</td>";
          }
        }
      });
      tab_text += "</tr>";
    });
  }
  if ($tfoot.length > 0) {
    $tfoot.find("tr").each(function () {
      var $footerRow = $(this);
      tab_text += "<tr>";
      $footerRow.find("td").each(function () {
        var $footerCell = $(this);
        if (
          $footerCell.css("display") !== "none" &&
          !$footerCell.attr("hidden") &&
          !$footerCell.hasClass("excelDisable")
        ) {
          var colspan = $footerCell.attr("colspan") || 1;
          var rowspan = $footerCell.attr("rowspan") || 1;
          var cellContent = $footerCell
            .html()
            .replace(/<p[^>]*>/gi, "")
            .replace(/<\/p>/gi, "<br>");
          tab_text +=
            "<td colspan='" +
            colspan +
            "' rowspan='" +
            rowspan +
            "' valign='top'>" +
            cellContent +
            "</td>";
        }
      });
      tab_text += "</tr>";
    });
  }

  tab_text += "</table>";
  tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, "");
  tab_text = tab_text.replace(/<img[^>]*>/gi, "");
  tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, "");
  var blob = new Blob([tab_text], { type: "application/vnd.ms-excel" });
  var url = URL.createObjectURL(blob);
  var a = document.createElement("a");
  a.href = url;
  if (woksheetname == null || woksheetname == undefined || woksheetname == "") {
    a.download = `datatableExport.xls`;
  } else {
    a.download = `${woksheetname}.xls`;
  }
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  URL.revokeObjectURL(url);
}

// This is for xlsx
//This requires plugin
//<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
function fnExcelParmReportXlsx(
  TableToExport,
  profile,
  parameter,
  woksheetname
) {
  var $table = $(TableToExport);
  var workbook = XLSX.utils.book_new();
  var worksheet = XLSX.utils.aoa_to_sheet([]);

  XLSX.utils.sheet_add_aoa(worksheet, [[profile]], { origin: "A1" });
  XLSX.utils.sheet_add_aoa(worksheet, [[parameter]], { origin: "A2" });

  worksheet["!merges"] = worksheet["!merges"] || [];
  worksheet["!merges"].push({ s: { r: 0, c: 0 }, e: { r: 0, c: 35 } });
  worksheet["!merges"].push({ s: { r: 1, c: 0 }, e: { r: 1, c: 35 } });
  var data = [];
  var spanMap = {};
  var columnCounts = {};
  $table.find("tr").each(function (rowIndex) {
    var row = [];
    $(this)
      .find("th, td")
      .each(function () {
        var $cell = $(this);
        if (
          $cell.css("display") !== "none" &&
          !$cell.attr("hidden") &&
          !$cell.hasClass("excelDisable")
        ) {
          var colspan = parseInt($cell.attr("colspan")) || 1;
          var rowspan = parseInt($cell.attr("rowspan")) || 1;
          var cellContent = $cell.text().trim();
          var colIndex = row.length;
          while (spanMap[`${rowIndex}:${colIndex}`]) {
            row.push("");
            colIndex++;
          }
          row.push(cellContent);

          if ($cell.is("th")) {
            var cellRef = XLSX.utils.encode_cell({
              r: rowIndex + 2,
              c: colIndex,
            });

            if (!worksheet[cellRef]) {
              worksheet[cellRef] = {};
            }

            worksheet[cellRef].s = {
              font: { bold: true },
            };
          }

          for (var i = 0; i < rowspan; i++) {
            for (var j = 0; j < colspan; j++) {
              if (!(i === 0 && j === 0)) {
                spanMap[`${rowIndex + i}:${colIndex + j}`] = true;
              }
            }
          }
          for (var i = 1; i < colspan; i++) {
            row.push("");
          }
        }
      });

    if (row.length > 0) {
      data.push(row);
    }
  });
  XLSX.utils.sheet_add_aoa(worksheet, data, { origin: "A3" });
  var colWidths = data.reduce((widths, row) => {
    row.forEach((cell, index) => {
      var width = cell ? cell.length : 10;
      widths[index] = Math.max(widths[index] || 0, width);
    });
    return widths;
  }, []);
  worksheet["!cols"] = colWidths.map((width) => ({ wch: width + 2 }));

  XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");

  var wbout = XLSX.write(workbook, { bookType: "xlsx", type: "array" });
  var blob = new Blob([wbout], {
    type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
  });
  var url = URL.createObjectURL(blob);
  var a = document.createElement("a");
  a.href = url;
  if (woksheetname == null || woksheetname == undefined || woksheetname == "") {
    a.download = `datatableExport.xlsx`;
  } else {
    a.download = `${woksheetname}.xlsx`;
  }
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  URL.revokeObjectURL(url);
}

// This is for CSV
function fnCsvParmReport(TableToExport, profile, parameter, filename) {
  var $table = $(TableToExport);
  var csvData = [];
  var colCount = $table.find("thead tr").first().find("th").length;

  let profilerow = [profile].concat(new Array(colCount - 1).fill(""));
  csvData.push(profilerow);

  let parameterrow = [parameter].concat(new Array(colCount - 1).fill(""));
  csvData.push(parameterrow);

  function extractHeaders() {
    let headerRows = [];
    let colTracker = [];
    $table.find("thead tr").each(function () {
      let row = [];
      let colIndex = 0;
      $(this)
        .find("th, td")
        .each(function () {
          let $cell = $(this);

          if (
            $cell.css("display") === "none" ||
            $cell.attr("hidden") ||
            $cell.hasClass("excelDisable")
          ) {
            return;
          }

          let cellContent = $cell.text().trim();
          let colspan = parseInt($cell.attr("colspan") || 1, 10);
          let rowspan = parseInt($cell.attr("rowspan") || 1, 10);

          while (colTracker[colIndex] > 0) {
            row.push("");
            colTracker[colIndex]--;
            colIndex++;
          }

          row.push(cellContent);

          for (let i = 1; i < colspan; i++) {
            row.push("");
          }

          if (rowspan > 1) {
            for (let i = 0; i < colspan; i++) {
              colTracker[colIndex + i] = rowspan - 1;
            }
          }

          colIndex += colspan;
        });

      headerRows.push(row);
    });

    let maxColumns = Math.max(...headerRows.map((row) => row.length));
    headerRows.forEach((row) => {
      while (row.length < maxColumns) {
        row.push("");
      }
    });

    return headerRows;
  }
  function extractBodyRows() {
    let bodyRows = [];
    $table.find("tbody tr").each(function () {
      let row = [];
      let colIndex = 0;
      let colTracker = [];

      $(this)
        .find("td")
        .each(function () {
          let $cell = $(this);

          if (
            $cell.css("display") === "none" ||
            $cell.attr("hidden") ||
            $cell.hasClass("excelDisable")
          ) {
            return;
          }

          let cellContent = $cell.text().trim();
          let colspan = parseInt($cell.attr("colspan") || 1, 10);

          while (colTracker[colIndex] > 0) {
            row.push("");
            colTracker[colIndex]--;
            colIndex++;
          }

          row.push(cellContent);

          for (let i = 1; i < colspan; i++) {
            row.push("");
          }

          colIndex += colspan;
        });

      if (row.length > 0) {
        bodyRows.push(row);
      }
    });

    let maxColumns = Math.max(...bodyRows.map((row) => row.length));
    bodyRows.forEach((row) => {
      while (row.length < maxColumns) {
        row.push("");
      }
    });
    return bodyRows;
  }
  let headers = extractHeaders();
  headers.forEach((row) => csvData.push(row));

  let bodyRows = extractBodyRows();
  bodyRows.forEach((row) => csvData.push(row));

  let csvString = csvData
    .map((row) => row.map((cell) => `"${cell.replace(/"/g, '""')}"`).join(","))
    .join("\n");

  let blob = new Blob([csvString], { type: "text/csv;charset=utf-8;" });
  let url = URL.createObjectURL(blob);
  let a = document.createElement("a");
  a.href = url;
  a.download =
    filename && filename.trim() !== ""
      ? `${filename}.csv`
      : "datatableExport.csv";
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  URL.revokeObjectURL(url);
}
const Swal2 = Swal.mixin({
  customClass: {
    input: "form-control",
  },
});

const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});
