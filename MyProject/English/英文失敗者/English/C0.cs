using System;
using System.Net;
using System.Windows;

namespace English
{
    public class C0
    {

        public int ptr;//指標
        public string CWORD;
        public string EWORD;
        public string INPUT="";//使用者輸入
        public bool isCorrect = false;//答案是否正確
        public C0(int ptr,string CWORD,string EWORD){
            this.ptr = ptr;
            this.CWORD = CWORD;
            this.EWORD = EWORD;
        }


        void clearINPUT(){
            INPUT = "";
        }



        //判斷是否為正確答案
        bool Result()
        {
            bool t = false;

            if (EWORD == INPUT)
            {
                t = true;
            }
            
            return t;
        }
    }
}
