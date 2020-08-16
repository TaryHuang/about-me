using System;
using System.Data.Linq;
using System.ComponentModel;
using System.Data.Linq.Mapping;

namespace ProverbEN
{
    public class DBHandler : DataContext
    {
        public static string DBConnection = "Data Source=isostore:/DB.sdf";

        public DBHandler(string pDBConnection) : base(pDBConnection) { }

        public Table<ProverbDb> ProverbDb;

    }
}
