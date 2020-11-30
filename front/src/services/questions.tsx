import { API_URL} from "../config/api";
import axios from 'axios';

export const fetchQuestions = () => (dispatch: (arg0: any) => void) => {
  axios.get(API_URL+'/questions/')
  .then((res: any) => {
    dispatch({
      questions: res.data.questions,
    });
  })
  .catch(function(error: any) {
    dispatch({
      questions: "No questions available.",
    });
  });
};
