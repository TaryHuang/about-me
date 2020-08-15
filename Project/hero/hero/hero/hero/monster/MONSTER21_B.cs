﻿using System;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MONSTER21_B : MONSTER21
    {


        public MONSTER21_B(Vector2 loc) : base(loc)
        {
            V = new TARY_VIMG(GamePage.picMONSTER1_B, loc);
            V.CenterPoint = true;
        }


        public override void info()
        {
            //＊＊父類別基礎屬性＊＊＊＊
            SCORE = 131;//擊倒分數
            HP = 75;//怪物血量
            ADD_X = 1.2f;//物件位移
            ADD_Y = 2.5f;//物件位移
            //＊＊＊＊＊＊＊＊＊＊＊＊＊
            V.H.Radius -= 3;//縮減感應範圍
            R_ADD = 0.3f;//選轉速度
            n = 70;//走多少才切換方向
        }

    }
}
