﻿using System;
using System.Data.Linq;
using System.ComponentModel;
using System.Data.Linq.Mapping;

namespace Stickies
{
    public class DBHandler : DataContext
    {
        public static string DBConnection = "Data Source=isostore:/DB.sdf";
        public static Random Rnd = new Random();
        public DBHandler(string pDBConnection) : base(pDBConnection) { }

        public Table<MTable> MTable;
        
    }
}
