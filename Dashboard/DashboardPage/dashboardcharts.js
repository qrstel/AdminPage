var foodInventoryLevel = {
    series: [{
        data: [23400, 12091, 45860, 12450, 10345]
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false
        },
    },
    colors: [
        "#FFFFFF"
    ],
    plotOptions: {
        bar: {
            distributed: true,
            borderRadius: 4,
            horizontal: false,
            columnWidth: '40%',
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: ['Vegetables', 'Fruits', 'Meats', 'Condiments', 'Spices'],
    },
    yaxis: {
        title: {
            text: "Stock Inventory Level"
        }
    }
};

var barCharts_food = new ApexCharts(document.querySelector("#bar-chart-food"), foodInventoryLevel);
barCharts_food.render();
/* ------------------------------------------------------------------------------------------------- */
var equipmentInventoryLevel = {
    series: [{
        data: [1000, 3500, 1200, 8700, 5100, 1400]
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false
        },
    },
    colors: [
        "#FFFFFF"
    ],
    plotOptions: {
        bar: {
            distributed: true,
            borderRadius: 4,
            horizontal: false,
            columnWidth: '40%',
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: ['Tables', 'Chairs', 'Tablecloths', 'Utensils', 'Cups', 'Serving Trays'],
    },
    yaxis: {
        title: {
            text: "Stock Inventory Level"
        }
    }
};

var barCharts_equipment = new ApexCharts(document.querySelector("#bar-chart-equipment"), equipmentInventoryLevel);
barCharts_equipment.render();