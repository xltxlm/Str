package Features

type Str_To_Pinyin struct {
    /* 需要处理的文字 */
    Value string

    /* 拼音中间的链接字符串,默认下划线 */
    Glue string

}

func NewStr_To_Pinyin(Value string,Glue string) *Str_To_Pinyin{
    var this = new(Str_To_Pinyin)
    this.SetValue(Value);
    this.SetGlue(Glue);
    return this
}

func (this *Str_To_Pinyin)GetValue() string{
    return this.Value;
}

func (this *Str_To_Pinyin)SetValue(Value string) *Str_To_Pinyin{
    this.Value = Value;
    return this
}
func (this *Str_To_Pinyin)GetGlue() string{
    return this.Glue;
}

func (this *Str_To_Pinyin)SetGlue(Glue string) *Str_To_Pinyin{
    this.Glue = Glue;
    return this
}

/**
    */
func (this *Str_To_Pinyin)__invoke(){

}

