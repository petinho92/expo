export let programs = [
    {
        id: 1, time: "2022.02.24", room: [
            {id: 1, room: "Hamerli terem", phase: [
                {id: 1, phase: [
                        {id: 1, time: "9:30-12:00", phaseName: "Plenáris ülés"},
                        {id: 2, time: "12:30-12:00", phaseName: "Plenáris ülés"},
                    ]}
                ]},
            {id: 2, room: "Vigan terem", phase: [{id: 1, phase: ""}]},
            {id: 3, room: "1. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 4, room: "3. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 5, room: "4. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 6, room: "6. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 7, room: "7. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 8, room: "8. szekcióterem", phase: [{id: 1, phase: ""}]},
        ]
    },
    {
        id: 2, time: "2022.02.25", room: [
            {id: 1, room: "Hamerli terem", phase: [{id: 1, phase: ""}]},
            {id: 2, room: "1. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 3, room: "3. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 4, room: "4. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 5, room: "6. szekcióterem", phase: [{id: 1, phase: ""}]},
            {id: 6, room: "7. szekcióterem", phase: [{id: 1, phase: ""}]},
        ]
    }
];

export let scannerData=[
    {id: 1, date: "2022.02.24.", room: "Hamerli terem", phase:"Plenáris Előadás", time:"9:30-12:00"},
    {id: 2, date: "2022.02.24.", room: "7. szekcióterem", phase:"Építészeti szakmai előadások", time:"13:00-18:20"},
    {id: 3, date: "2022.02.24.", room: "Zsolnay terem, 8. szekcióterem", phase:"Építőmérnöki szakmai előadások", time:"13:00-18:00"},
    {id: 4, date: "2022.02.24.", room: "Hamerli terem", phase:"Épületgépészeti szakmai előadások", time:"12:30-16:15"},
    {id: 5, date: "2022.02.24.", room: "3. szekcióterem", phase:"Gépészeti szakmai előadások", time:"12:30-16:15"},
    {id: 6, date: "2022.02.24.", room: "6. szekcióterem", phase:"Alkalmazott informatikai szakmai előadások", time:"13:00-17:05"},
    {id: 7, date: "2022.02.24.", room: "4. szekcióterem", phase:"Környezetipari, labortechnikai szakmai előadások", time:"13:00-16:25"},
    {id: 7, date: "2022.02.24.", room: "1. szekcióterem", phase:"Villamos energetika szakmai előadások", time:"13:00-16:10"},
    {id: 8, date:"2022.02.25.", room:"4. szekcióterem", phase:"A PTE MIK szakmérnöki képzései", time:"9:00-10:55"},
    {id: 9, date:"2022.02.25.", room:"8. szekcióterem", phase:"A PTE MIK szakmérnöki képzései", time:"9:00-11:20"},
    {id: 10, date:"2022.02.25.", room:"3. szekcióterem", phase:"Construction technologies section", time:"9:00-12:30"},
    {id: 11, date:"2022.02.25.", room:"7. szekcióterem", phase:"Építészeti szakmai előadások", time:"9:00-13:25"},
    {id: 12, date:"2022.02.25.", room:"Hamerli terem", phase:"Épületgépészeti szakmai előadások", time:"9:00-12:00"},
    {id: 13, date:"2022.02.25.", room:"6. szekcióterem", phase:"Alkalmazott informatikai szakmai előadások", time:"9:00-11:55"},
    {id: 14, date:"2022.02.25.", room:"1. szekcióterem", phase:"Villamosipari és informatikai szakmai előadások", time:"9:00-11:55"},
];

export let days=[
    {id: 1, name:"2022.02.24."},
    {id: 2, name: "2022.02.25."}
];

export let rooms = [
    {id: 1, name: "Hamerli terem", day: 1},
    {id: 2, name: "Hamerli terem", day: 2},
    {id: 3, name: "Zsolnay terem, 8. szekcióterem", day: 1},
    {id: 4, name: "3. szekcióterem", day: 1},
    {id: 4, name: "3. szekcióterem", day: 2},


];
