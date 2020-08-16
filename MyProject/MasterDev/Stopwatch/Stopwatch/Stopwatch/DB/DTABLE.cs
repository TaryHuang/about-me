using System;
using System.Data.Linq;
using System.Data.Linq.Mapping;
using System.ComponentModel;
using System.Collections.ObjectModel;
using System.Data;

namespace Stopwatch
{
    //實作INotifyPropertyChanged與INotifyPropertyChanging介面，做為屬性(欄位)值變更時的事件觸發。
    [Table(Name = "DTABLE")]
    public class DTABLE : INotifyPropertyChanged, INotifyPropertyChanging
    {
        private int gID;
        [Column(IsPrimaryKey = true, IsDbGenerated = true,
                DbType = "INT NOT NULL Identity", CanBeNull = false, AutoSync = AutoSync.OnInsert)]
        public int ID
        {
            get
            {
                return gID;
            }
            set
            {
                NotifyPropertyChanging("ID");
                gID = value;
                NotifyPropertyChanged("ID");
            }
        }




        private string gCWORD;
        [Column(DbType = "NVarChar(50) NULL", CanBeNull = false, Storage = "CWORD")]
        public string CWORD
        {
            get
            {
                return gCWORD;
            }
            set
            {
                NotifyPropertyChanging("CWORD");
                gCWORD = value;
                NotifyPropertyChanging("CWORD");
            }
        }



        private int gMasteri;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "Masteri")]
        public int Masteri
        {

            get
            {
                return gMasteri;
            }
            set
            {
                NotifyPropertyChanging("Masteri");
                gMasteri = value;
                NotifyPropertyChanging("Masteri");
            }
        }





        private int gN;
        [Column(DbType = "INT NULL", CanBeNull = false, Storage = "N")]
        public int N
        {

            get
            {
                return gN;
            }
            set
            {
                NotifyPropertyChanging("N");
                gN = value;
                NotifyPropertyChanging("N");
            }
        }



        #region INotifyPropertyChanging觸發事件
        public event PropertyChangingEventHandler PropertyChanging;

        private void NotifyPropertyChanging(string pPropertyName){
            if (PropertyChanging!=null){
                PropertyChanging(this, new PropertyChangingEventArgs(pPropertyName));
            }
        }
        #endregion

        #region INotifyPropertyChanged觸發事件
        public event PropertyChangedEventHandler PropertyChanged;

        private void NotifyPropertyChanged(string pPropertyName)
        {
            if (PropertyChanged != null)
            {
                PropertyChanged(this, new PropertyChangedEventArgs(pPropertyName));
            }
        }
        #endregion
    }



}
