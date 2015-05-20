<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TabPo;

/**
 * TabPoSearch represents the model behind the search form about `backend\models\TabPo`.
 */
class TabPoSearch extends TabPo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'PO_Status', 'PO_Qty'], 'integer'],
            [['PO_No', 'PO_Date', 'PO_Time', 'User_Create', 'User_Approve', 'UPDT'], 'safe'],
            [['PO_Subtotal', 'PO_Grandtotal'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TabPo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'PO_Date' => $this->PO_Date,
            'PO_Time' => $this->PO_Time,
            'PO_Status' => $this->PO_Status,
            'PO_Subtotal' => $this->PO_Subtotal,
            'PO_Qty' => $this->PO_Qty,
            'PO_Grandtotal' => $this->PO_Grandtotal,
            'UPDT' => $this->UPDT,
        ]);

        $query->andFilterWhere(['like', 'PO_No', $this->PO_No])
            ->andFilterWhere(['like', 'User_Create', $this->User_Create])
            ->andFilterWhere(['like', 'User_Approve', $this->User_Approve]);

        return $dataProvider;
    }
}
