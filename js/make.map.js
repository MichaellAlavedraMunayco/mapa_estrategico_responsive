function init() {
    var $ = go.GraphObject.make;

    myDiagram =
        $(go.Diagram, "myDiagramDiv",
            {
                initialContentAlignment: go.Spot.Center,
                "undoManager.isEnabled": true
            }
        );

    // myDiagram.nodeTemplateMap.add("colspan",
    //     $(go.Node, "Auto",
    //         $(go.Shape, { fill: null, stroke: "red" }),
    //         $(go.Panel, "Table",
    //             $(go.Panel, "Auto",
    //                 { row: 0, column: 0, columnSpan: 2, stretch: go.GraphObject.Fill, margin: 3 },
    //                 $(go.Shape, { fill: null, stroke: "red", width: 0, height: 60 })
    //             ),
    //             $(go.Panel, "Auto",
    //                 { row: 1, column: 0, margin: 3 },
    //                 $(go.Shape, { fill: null, stroke: "red", width: 100, height: 40 })
    //             ),
    //             $(go.Panel, "Auto",
    //                 { row: 1, column: 1, margin: 3 },
    //                 $(go.Shape, { fill: null, stroke: "red", width: 100, height: 40 })
    //             )
    //         )
    //     )
    // );

    myDiagram.nodeTemplateMap.add("rowspan",
        $(go.Node, "Auto",
            $(go.Shape, { figure: "RoundedRectangle", fill: null }), // outer border
            $(go.Panel, "Table",
                $(go.Part, "Auto",
                    {
                        row: 1, column: 0,
                        stretch: go.GraphObject.Vertical
                    },
                    $(go.Shape, { figure: "RoundedRectangle", fill: null }),
                    $(go.TextBlock, { alignment: go.Spot.Center, font: "bold 12pt sans-serif", angle: 270 },
                        "Hola")
                ),
                $(go.Panel, "Auto",
                    { row: 0, column: 0, margin: 3 },
                    $(go.Shape, { figure: "RoundedRectangle", fill: null, width: 100, height: 40 })
                ),
                $(go.Panel, "Auto",
                    { row: 1, column: 0, margin: 3 },
                    $(go.Shape, { figure: "RoundedRectangle", fill: null, width: 100, height: 40 })
                ),
                $(go.Panel, "Auto",
                    { row: 0, column: 1, rowSpan: 2, stretch: go.GraphObject.Fill, margin: 3 },
                    $(go.Shape, { figure: "RoundedRectangle", fill: null, width: 120, height: 0 })
                )
            )
        )
    );

    myDiagram.model = new go.GraphLinksModel(
        [
            { key: "Alpha", category: "colspan" },
            { key: "Beta", category: "rowspan" }
        ]
    );
}

init();