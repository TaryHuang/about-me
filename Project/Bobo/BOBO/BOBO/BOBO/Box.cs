using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    interface Box
    {

        bool CUPDATE();//是否可以啟動UPDATE
        bool Match(BoundingBox A);
        bool Match(BoundingSphere A);
        void UPDATE();//是否可以動態
        void Draw();
    }
}
