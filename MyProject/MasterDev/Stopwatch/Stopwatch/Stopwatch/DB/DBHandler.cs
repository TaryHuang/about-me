using System;
using System.Data.Linq;
using System.ComponentModel;
using System.Data.Linq.Mapping;

namespace Stopwatch
{
    public class DBHandler : DataContext
    {
        public static string DBConnection = "Data Source=isostore:/DB.sdf";
        public static Random Rnd = new Random();
        public DBHandler(string pDBConnection) : base(pDBConnection) { }

        public Table<MTABLE> MTABLE;
        public Table<DTABLE> DTABLE;
    }
}
